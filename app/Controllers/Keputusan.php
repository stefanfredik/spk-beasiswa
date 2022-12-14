<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Libraries\Moora as MooraLib;
use App\Models\KelayakanModel;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use App\Models\SiswaModel;
use App\Models\SubkriteriaModel;
use App\Models\Tahapbeasiswa;

class Keputusan extends BaseController {
    private $point = 'keputusan';
    private $jenisBantuan = 'blt';

    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
        $this->siswaModel = new SiswaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->pesertaModel = new PesertaModel();
        $this->jumlahKriteria = $this->kriteriaModel->countAllResults();
        $this->kelayakanModel = new KelayakanModel();
        $this->tahapModel = new Tahapbeasiswa();
    }

    public function index() {
        $kriteria       = $this->kriteriaModel->findAll();
        $subkriteria    = $this->subkriteriaModel->findAll();
        $peserta        = $this->pesertaModel->findAllPeserta();
        $kelayakan      = $this->kelayakanModel->findAll();

        helper('Check');
        $check = checkdata($peserta, $kriteria, $subkriteria, $kelayakan);
        if ($check) return view('/error/index', ['title' => 'Error', 'listError' => $check]);

        $moora = new MooraLib($peserta, $kriteria, $subkriteria, $kelayakan);

        $data = [
            'title'         => 'Data Keputusan Beasiswa Peserta',
            'peserta'       => $moora->getAllPeserta(),
            'kelayakan'     => $kelayakan,
            'tahap'        => $this->tahapModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];
        return view('keputusan/index', $data);
    }
}
