<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KelayakanModel;
use CodeIgniter\API\ResponseTrait;

class Kelayakan extends BaseController {
    use ResponseTrait;
    private $point = 'kelayakan';
    private $totalNilaiKriteria;

    public function __construct() {
        $this->kelayakanModel = new KelayakanModel();
    }

    public function index() {
        $data = [
            'title' => 'Data Kelayakan',
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view("/kelayakan/index", $data);
    }

    public function table() {
        $data = [
            'title' => 'Data Kelayakan',
            'dataKelayakan' => $this->kelayakanModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/kelayakan/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Kelayakan',
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/kelayakan/tambah', $data);
    }

    public function get($id) {
        $data = [
            'title' => 'Edit Data Kelayakan',
            'kelayakan'  => $this->kelayakanModel->find($id),
        ];

        return $this->respond(view('/kelayakan/edit', $data), 200);
    }

    public function save($id = null) {
        if ($id == null) {
            $data = $this->request->getPost();

            $this->kelayakanModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res, 200);
        } else {
            $data = $this->request->getPost();
            $this->kelayakanModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res, 200);
        }
    }

    public function delete($id) {
        $this->kelayakanModel->delete($id);
        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
