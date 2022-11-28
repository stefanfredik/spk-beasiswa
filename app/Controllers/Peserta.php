<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\KriteriaModel;
use App\Models\PesertaModel;
use App\Models\SiswaModel;
use App\Models\SubkriteriaModel;
use CodeIgniter\API\ResponseTrait;

class Peserta extends BaseController
{
    use ResponseTrait;

    private $url = 'datapeserta';
    private $title = 'Data Peserta';
    private $jumlahKriteria = 0;
    private $point = 'peserta';

    public function __construct()
    {
        $this->kriteriaModel = new KriteriaModel();
        $this->siswaModel = new SiswaModel();
        $this->subkriteriaModel = new SubkriteriaModel();
        $this->pesertaModel = new PesertaModel();
        $this->jumlahKriteria = $this->kriteriaModel->countAllResults();
    }

    public function index()
    {
        // dd($this->pendudukModel->findAllNonBantuan());

        $data = [
            'title' => 'Data Peserta',
            'url'   => [
                'parent' => 'peserta'
            ]
        ];

        return view('/peserta/index', $data);
    }

    public function tambah()
    {
        $data = [
            'title' => 'Tambah Data Peserta',
            'url'   => $this->url,
            'dataSiswa' => $this->siswaModel->findAll(),
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
        ];

        return view('/peserta/tambah', $data);
    }

    public function table()
    {
        $data = [
            'title' => 'Data Peserta',
            'url'   => $this->url,
            'dataKriteria' => $this->kriteriaModel->findAll(),
            'siswaModel' => $this->siswaModel->findAll(),
            'dataPeserta' => $this->pesertaModel->findAllPeserta(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];


        return view('/peserta/table', $data);
    }

    public function get($id)
    {

        $data = [
            'title' => 'Edit Data Peserta',
            'dataKriteria'  => $this->kriteriaModel->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->findAll(),
            'dataSiswa' => $this->siswaModel->findAll(),
            'peserta' => $this->pesertaModel->findAllPeserta($id),
            'url'   => $this->url
        ];

        // dd($data);

        return $this->respond(view('/peserta/edit', $data), 200);
    }

    public function detail($id)
    {

        $data = [

            'dataKriteria'  => $this->kriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'dataSubkriteria' => $this->subkriteriaModel->where('jenis_bantuan', $this->jenisBantuan)->findAll(),
            'dataSiswa' => $this->siswaModel->findAll(),
            'peserta' => $this->pesertaModel->findAllPeserta($id),
            'url'   => $this->url
        ];

        $data['title'] = 'Detail ' . $data['peserta']['nama_lengkap'];

        return $this->respond(view('/peserta/detail', $data), 200);
    }

    public function save()
    {
        $data = $this->request->getPost();
        $this->pesertaModel->save($data);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menambah Data.',
        ];

        return $this->respond($res, 200);
    }


    public function postSaveedit($id)
    {
        $data = $this->request->getPost();
        $this->bltModel->update($id, $data);

        $res = [
            'status' => 'success',
            'msg'   => 'Data User Berhasil Diupdate.',
            'data'  => $data
        ];

        return $this->respond($res, 200);
    }



    public function delete($id)
    {

        $this->pesertaModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Data berhasil dihapus.',
        ];

        return $this->respond($res, 200);
    }

    private function statusBerkas($id)
    {
        $this->Peserta->first($id);
    }
}
