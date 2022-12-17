<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;

class Subkriteria extends BaseController {
    use ResponseTrait;
    var $url = 'subkriteria';
    var $point = "subkriteria";

    public function __construct() {
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->kriteriaModel = new KriteriaModel();
    }

    public function index() {

        $data = [
            'url'       => [
                'parent'    => $this->point
            ],

            'title' => 'Data Sub Kriteria'
        ];

        return view('/subkriteria/index', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Sub Kriteria',
            'kriteria' => $this->kriteriaModel->findAll(),
            'url'   => $this->url
        ];

        return view('/subkriteria/tambah', $data);
    }
    public function table() {
        $data = [
            'title' => 'Data Sub Kriteria',
            'dataSubkriteria' => $this->subkriteriaModel->findAllSubkriteria(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/subkriteria/table', $data);
    }

    public function get($id) {
        $data = [
            'title' => 'Edit Data Penduduk',
            'subkriteria'  => $this->subkriteriaModel->find($id),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'url'   => $this->url
        ];

        return $this->respond(view('/subkriteria/edit', $data), 200);
    }

    public function save($id = null) {
        if ($id == null) {
            $data = $this->request->getPost();
            $this->subkriteriaModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'       => 'Berhasil Menambah Data.',
            ];

            return $this->respond($res, 200);
        } else {
            $data = $this->request->getPost();
            $this->subkriteriaModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil Mengedit Data.',
            ];

            return $this->respond($res, 200);
        }
    }

    public function delete($id) {

        $this->subkriteriaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
