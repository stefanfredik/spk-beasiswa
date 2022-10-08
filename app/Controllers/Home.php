<?php

namespace App\Controllers;

use App\Models\PesertaModel;
use App\Models\SiswaModel;

class Home extends BaseController {
    public function __construct() {
        $this->siswaModel = new SiswaModel();
        $this->pesertaModel = new PesertaModel();
    }
    public function index() {
        $data = [
            'title' => 'Halaman Utama',
            'jumlahSiswa' => $this->siswaModel->countAll(),
            'jumlahPeserta' => $this->pesertaModel->countAll(),
            'url'   => [
                'parent' => 'home'
            ]
        ];

        return view('admin/index', $data);
    }
}
