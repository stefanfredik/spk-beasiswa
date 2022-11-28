<?php

namespace App\Controllers;


use App\Controllers\BaseController;
use App\Libraries\Moora as MooraLib;
use App\Models\SiswaModel;
use App\Models\KelayakanModel;
use App\Models\KriteriaModel;
use App\Models\PendudukModel;
use App\Models\PesertaModel;
use App\Models\SubkriteriaModel;

class Moora extends BaseController {
    private $url = 'perhitungan';
    private $totalNilaiKriteria;
    private $point = 'moora';

    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
        $this->pesertaModel = new PesertaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->siswaModel = new SiswaModel();
        $this->kelayakanModel = new KelayakanModel();

        $this->jumlahKriteria = $this->kriteriaModel->countAllResults();
    }


    public function index() {
        $kriteria       = $this->kriteriaModel->findAll();
        $subkriteria    = $this->subkriteriaModel->findAll();
        $peserta        = $this->pesertaModel->findAllPeserta();
        $kelayakan      = $this->kelayakanModel->findAll();

        helper('Check');

        $check = checkdata($peserta, $kriteria, $subkriteria, $kelayakan);
        if ($check) return view('/error/index', [
            'title' => 'Error',
            'listError' => $check,
            'url'       => [
                'parent'    => $this->point
            ]
        ]);

        $moora = new MooraLib($peserta, $kriteria, $subkriteria, $kelayakan);

        $data = [
            'title' => 'Data Perhitungan dan Table Moora',
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'totalNilaiKriteria' => $this->totalNilaiKriteria,
            'peserta' => $moora->getAllPeserta(),
            'jumKriteriaBenefit' => $moora->jumKriteriaBenefit,
            'jumKriteriaCost' => $moora->jumKriteriaCost,
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
            'bobotKriteria' => $moora->bobotKriteria,
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/moora/index', $data);
    }
}
