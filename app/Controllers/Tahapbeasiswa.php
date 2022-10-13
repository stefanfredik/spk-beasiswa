<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Tahapbeasiswa as ModelsTahapbeasiswa;
use CodeIgniter\API\ResponseTrait;

class Tahapbeasiswa extends BaseController {
    use ResponseTrait;
    public function __construct() {
        $this->tahapModel = new ModelsTahapbeasiswa();
        $this->point =  'tahapbeasiswa';
    }

    public function index() {
        $data = [
            'title' => 'Tahap Beasiswa',
            'url'   => [
                'parent' => $this->point
            ]
        ];

        return view('/tahapbeasiswa/index', $data);
    }


    public function table() {
        $data = [
            'tahap' => $this->tahapModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/tahapbeasiswa/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => "Tambah Data Tahap Beasiswa"
        ];

        return view('/tahapbeasiswa/tambah', $data);
    }

    public function save($id = null) {
        if ($id == null) {
            $data = $this->request->getPost();
            $this->tahapModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res);
        } else {
            $data = $this->request->getPost();
            $this->tahapModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil Mengedit Data.',
            ];

            return $this->respond($res);
        }
    }

    public function delete($id) {
        $this->tahapModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menghapus Data.',
        ];

        return $this->respond($res, 200);
    }

    public function get($id) {
        $data = [
            "title" => "Edit Data User",
            "tahap" => $this->tahapModel->find($id)
        ];

        return view("/tahapbeasiswa/edit", $data);
    }
}
