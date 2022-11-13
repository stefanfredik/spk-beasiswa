<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use App\Models\SiswaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;


class Peserta extends BaseController {
    use ResponseTrait;
    public function __construct() {
        $this->pesertaModel = new PesertaModel();
        $this->point = 'peserta';
        $this->siswaModel = new SiswaModel();
        $this->kriteriaModel = new KriteriaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
    }
    public function index() {
        // dd($this->subkriteriaModel->findAllSubkriteria());
        $data = [
            'title' => 'Data Peserta',
            'url'   => [
                'parent' => 'peserta'
            ]
        ];

        return view('/peserta/index', $data);
    }

    public function table() {

        // foreach ($this->pesertaModel->findAllPeserta() as $dt) {

        // }

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
            'siswa' => $this->siswaModel->findAll(),
            'subkriteria' => $this->subkriteriaModel->findAllSubkriteria()
        ];

        return view('/peserta/tambah', $data);
    }

    public function get($id) {
        // dd($this->pesertaModel->findPeserta($id));
        $data = [
            "title" => "Edit Data Peserta",
            'siswa' => $this->siswaModel->findAll(),
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
                        'is_unique' => 'Siswa peserta telah direkam.'
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

    public function delete($id) {
        $this->pesertaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menghapus Data.',
        ];

        return $this->respond($res, 200);
    }
}
