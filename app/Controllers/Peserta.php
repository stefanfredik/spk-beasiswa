<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use App\Models\SiswaModel;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\Config\Config;
use Config\Database;

class Peserta extends BaseController {
    use ResponseTrait;
    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->point = 'peserta';
        $this->siswaModel = new SiswaModel();
        $this->kriteriaModel = new KriteriaModel();
    }
    public function index() {
        $data = [
            'title' => 'Data Peserta',
            'url'   => [
                'parent' => 'peserta'
            ]
        ];

        return view('/peserta/index', $data);
    }

    public function table() {
        // dd($this->pesertaModel->findAllPeserta());

        $data = [
            'title' => 'Tambah Data Peserta',
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'kriteria'    => $this->kriteriaModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/peserta/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => "Data Peserta",
            'siswa' => $this->siswaModel->findAll()
        ];

        return view('/peserta/tambah', $data);
    }

    public function get($id) {
        // dd($this->pesertaModel->findPeserta($id));
        $data = [
            "title" => "Edit Data Peserta",
            "peserta" => $this->pesertaModel->findPeserta($id)
        ];

        return view("/peserta/edit", $data);
    }

    public function save($id = null) {

        if ($id == null) {
            $rules = [
                'nisn'  => [
                    'rules'  => 'required|is_unique[peserta.nisn]',
                    'errors' => [
                        'is_unique' => 'Siswa yang anda pilih telah jadi peserta.'
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
            $this->pesertaModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];
            return $this->respond($res, 200);
        } else {
            $data = $this->request->getPost();
            $this->pesertaModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil mengedit Data.',
            ];

            return $this->respond($res, 200);
        }
    }
}
