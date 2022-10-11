<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PesertaModel;

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

        $data = [
            'title' => 'Data Keputusan',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/keputusan/table', $data);
    }
}
