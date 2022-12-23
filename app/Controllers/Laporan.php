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
use Dompdf\Dompdf;
use PhpParser\Node\Expr\Cast\String_;

class Laporan extends BaseController {
    private $point = 'laporan';

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
            'title'         => 'Laporan Peserta Beasiswa',
            'peserta'       => $moora->getAllPeserta(),
            'kelayakan'     => $kelayakan,
            'tahap'        => $this->tahapModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];
        return view('laporan/penerima/index', $data);
    }


    public function peserta() {
        return $this->index();
    }

    public function siswa() {
        $data = [
            'title' => 'Laporan Data Siswa',
            'dataSiswa' => $this->siswaModel->findAll(),
            'url'   => [
                'parent'    => 'siswa'
            ]
        ];

        return view('/laporan/siswa/index', $data);
    }

    public function cetakPeserta() {
        $tahapModel     = new Tahapbeasiswa();
        $kriteria       = $this->kriteriaModel->findAll();
        $subkriteria    = $this->subkriteriaModel->findAll();
        $peserta        = $this->pesertaModel->findAllPeserta();
        $kelayakan      = $this->kelayakanModel->findAll();

        $moora = new MooraLib($peserta, $kriteria, $subkriteria, $kelayakan);

        $data = [
            'title'         => 'Data Laporan',
            'peserta'       => $moora->getAllPeserta(),
            'kelayakan'     => $kelayakan,
            'tahap'        => $this->tahapModel->findAll(),
        ];

        $this->cetak($data, "/laporan/penerima/cetak");
    }

    public function cetakSiswa() {
        $data = [
            'title' => 'Laporan Data Siswa SMA Negeri 2 Komodo tahun 2022',
            'dataSiswa' => $this->siswaModel->findAll(),
            'url'   => [
                'parent'    => 'siswa'
            ]
        ];

        $this->cetak($data, "/laporan/siswa/cetak");
    }


    private function cetak(array $data, String $view) {
        $pdf = new Dompdf(array('DOMPDF_ENABLE_REMOTE' => true));

        $html = view($view, $data);
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        return $pdf->stream();
    }
}
