<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use CodeIgniter\API\ResponseTrait;

class Kriteria extends BaseController {
    use ResponseTrait;

    private $url = 'kriteria';
    private $dir = 'blt';
    private $table = 'kriteria';

    public function __construct() {
        $this->kriteriaModel = new KriteriaModel();
        $this->Peserta = new PesertaModel();
        $this->forge = \Config\Database::forge();

        $this->point =  'kriteria';
    }

    public function index() {
        // dd($this->kriteriaModel->orderBy('id', 'desc')->first()['id']);
        $data = [
            'url' => $this->url,
            'table' => $this->table,
            'title' => 'Data Kriteria',
            'url'   => [
                'parent' => 'kriteria'
            ]
        ];

        return view('/kriteria/index', $data);
    }

    public function tambah() {
        $data = [
            'title' => 'Tambah Data Kriteria',
            'url'   => $this->url
        ];

        return view('/kriteria/tambah', $data);
    }
    public function table() {
        $data = [
            'title' => 'Data Kriteria',
            'url'   => $this->url,
            'table' => $this->table,
            'kriteria' => $this->kriteriaModel->orderBy('keterangan', 'ASC')->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/kriteria/table', $data);
    }

    public function get($id) {
        $data = [
            'title' => 'Edit Data Kriteria',
            'kriteria'  => $this->kriteriaModel->find($id),
            'url'   => $this->url
        ];

        return $this->respond(view('/kriteria/edit', $data), 200);
    }

    public function save($id = null) {
        if ($id == null) {
            $data = $this->request->getPost();
            $this->kriteriaModel->save($data);

            $result = $this->kriteriaModel->orderBy('id', 'desc')->first();
            $column = 'k_' . $result['id'];

            $field = [
                $column => [
                    'type' => 'INT'
                ]
            ];

            // return $this->respond($field, 200);

            $this->forge->addColumn('peserta', $field);
            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res, 200);
        } else {
            $data = $this->request->getPost();
            $this->kriteriaModel->update($id, $data);

            $res = [
                'status' => 'success',
                'msg'   => 'Data User Berhasil Diupdate.',
                'data'  => $data
            ];

            return $this->respond($res, 200);
        }
    }


    public function delete($id) {
        $this->kriteriaModel->delete($id);

        $column = "k_" . $id;
        $this->forge->dropColumn('peserta', $column);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }
}
