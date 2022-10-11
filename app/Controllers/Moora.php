<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;

class Moora extends BaseController {
    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->point = 'moora';
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index() {
        $data = [
            'title' => "Penghitungan Moora",
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'kriteria'    => $this->kriteriaModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];
        return view('/moora/index', $data);
    }
}
