<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesertaModel;
use App\Models\Tahapbeasiswa;
use Dompdf\Dompdf;

class Laporan extends BaseController {
    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->point = 'laporan';
    }
    public function index() {
        $data = [
            'title' => "Laporan",
            'url'       => [
                'parent'    => 'laporan'
            ]
        ];
        return view('/laporan/index', $data);
    }

    public function table() {
        $tahapModel = new Tahapbeasiswa();
        $data = [
            'title' => 'Data Laporan',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'tahap'        => $tahapModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/laporan/table', $data);
    }

    public function cetak() {

        $tahapModel = new Tahapbeasiswa();
        $data = [
            'title' => 'Data Laporan',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'tahap'        => $tahapModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        $pdf = new Dompdf();

        $html = view("/laporan/cetak", $data);
        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        return $pdf->stream();
    }
}
