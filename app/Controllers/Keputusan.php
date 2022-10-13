<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesertaModel;
use App\Models\Tahapbeasiswa;

class Keputusan extends BaseController {
    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->point = 'keputusan';
    }
    public function index() {
        $data = [
            'title' => "Keputusan",
            'url'       => [
                'parent'    => 'keputusan'
            ]
        ];
        return view('/keputusan/index', $data);
    }

    public function table() {
        // dd($this->pesertaModel->findAllPeserta());

        $tahapModel = new Tahapbeasiswa();
        $data = [
            'title' => 'Data Keputusan',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'tahap'        => $tahapModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/keputusan/table', $data);
    }
}
