<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;

class Nilai extends BaseController {
    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->point = 'nilai';
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index() {
        $data = [
            'title' => "Nilai",
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'kriteria'    => $this->kriteriaModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];
        return view('/nilai/index', $data);
    }

    public function table() {
        $data = [
            'title' => "Nilai",
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'kriteria'    => $this->kriteriaModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];
        return view('/nilai/table', $data);
    }
}
