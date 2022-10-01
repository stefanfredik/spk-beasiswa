<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SiswaModel;
use CodeIgniter\API\ResponseTrait;

class Siswa extends BaseController {
    use ResponseTrait;

    public function __construct() {
        $this->SiswaModel = new SiswaModel();
    }


    public function index() {
        $data = [
            'title' => "Data Siswa",
            'dataSiswa' => $this->SiswaModel->findAll(),
            'url'       => [
                'parent'    => 'siswa'
            ]
        ];

        return view("siswa/index", $data);
    }

    public function delete($id) {
        $this->SiswaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menghapus Data.',
        ];

        return $this->respond($res, 200);
    }

    public function table() {
        $data = [
            'dataSiswa' => $this->SiswaModel->findAll()
        ];

        return view('/siswa/table', $data);
    }

    public function save($id = null) {
        if ($id == null) {
            $rules = [
                'nisn'  => [
                    'rules'  => 'required|is_unique[siswa.nisn]',
                    'errors' => [
                        'is_unique' => 'Nisn telah digunakan.'
                    ]
                ],
            ];

            if (!$this->validate($rules)) {

                $res = [
                    'status' => 'error',
                    'error' => $this->validation->getErrors()
                ];

                return $this->respond($res);
            }

            $data = $this->request->getPost();
            $this->SiswaModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];
            return $this->respond($res, 200);
        } else {
            $data = $this->request->getPost();
            $this->SiswaModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil mengedit Data.',
            ];

            return $this->respond($res, 200);
        }
    }

    public function tambah() {
        $data = [
            'title' => "Data Siswa"
        ];

        return view('/siswa/tambah', $data);
    }

    public function get($id) {
        $data = [
            "title" => "Edit Data Siswa",
            "siswa" => $this->SiswaModel->find($id)
        ];

        return view("/siswa/edit", $data);
    }
}
