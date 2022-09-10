<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class Kriteria extends BaseController {
    use ResponseTrait;
    public function __construct() {
        $this->KriteriaModel = new KriteriaModel();
        $this->point =  'kriteria';
    }
    public function index() {
        $data = [
            'title' => 'Data Kriteria',
            'url'   => [
                'parent' => 'kriteria'
            ]
        ];

        return view('/kriteria/index', $data);
    }

    public function table() {
        $data = [
            'kriteria' => $this->KriteriaModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/kriteria/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => "Tambah Data Kriteria"
        ];

        return view('/kriteria/tambah', $data);
    }

    public function save($id = null) {
        if ($id == null) {
            $data = $this->request->getPost();
            $this->KriteriaModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res);
        } else {
            $data = $this->request->getPost();
            $this->KriteriaModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil Mengedit Data.',
            ];

            return $this->respond($res);
        }
    }

    public function delete($id) {
        $this->KriteriaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menghapus Data.',
        ];

        return $this->respond($res, 200);
    }

    public function get($id) {
        $data = [
            "title" => "Edit Data User",
            "kriteria" => $this->KriteriaModel->find($id)
        ];

        return view("/kriteria/edit", $data);
    }
}
