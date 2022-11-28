<?php

namespace App\Models;

use CodeIgniter\Model;

class PesertaModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'peserta';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'nisn', 'penghasilan', 'tanggungan', 'nilai', 'yatimpiatu',];

    function findAllPeserta() {
        $db = \Config\Database::connect();
        $builder = $db->table('peserta');
        $builder->select('peserta.*');
        $builder->select('siswa.nama_siswa');
        $builder->join('siswa', 'peserta.nisn = siswa.nisn');
        return $builder->get()->getResultArray();
    }

    function findPeserta($id) {
        $db = \Config\Database::connect();
        $builder = $db->table('peserta');
        $builder->select('peserta.*');
        $builder->select('siswa.nama_siswa');
        $builder->where('peserta.id', $id);
        $builder->join('siswa', 'peserta.nisn = siswa.nisn');
        return $builder->get()->getFirstRow('array');
    }
}
