<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;

class Subkriteria extends BaseController {

    use ResponseTrait;

    public function __construct() {
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->kriteriaModel = new KriteriaModel();

        $this->point = "subkriteria";
    }

    public function index() {
        // dd($this->subkriteriaModel->findAllSubkriteria());

        $data = [
            'title' => 'Data Sub Kriteria',
            'url'   => [
                'parent' => 'subkriteria'
            ]
        ];

        return view('/subkriteria/index', $data);
    }

    public function table() {
        $data = [
            'subkriteria' => $this->subkriteriaModel->findAllSubkriteria(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/subkriteria/table', $data);
    }

    public function tambah() {
        $data = [
            'title' => "Tambah Data Sub Kriteria",
            'kriteria' => $this->kriteriaModel->findAll()
        ];

        return view('/subkriteria/tambah', $data);
    }

    public function save($id = null) {
        if ($id == null) {
            $data = $this->request->getPost();
            $this->subkriteriaModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res);
        } else {
            $data = $this->request->getPost();
            $this->subkriteriaModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil Mengedit Data.',
            ];

            return $this->respond($res);
        }
    }

    public function delete($id) {
        $this->subkriteriaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menghapus Data.',
        ];

        return $this->respond($res, 200);
    }

    public function get($id) {
        $data = [
            "title" => "Edit Data Subkriteria",
            "subkriteria" => $this->subkriteriaModel->find($id),
            // "allkriteria" => $this->subkriteriaModel->findAllSubkriteria()
        ];

        return view("/subkriteria/edit", $data);
    }
}
