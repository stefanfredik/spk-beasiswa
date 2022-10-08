<?php

namespace App\Models;

use CodeIgniter\Model;

class SubkriteriaModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'subkriteria';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id', 'id_kriteria', 'subkriteria', 'nilai'];


    public function findAllSubkriteria() {
        $db = \Config\Database::connect();
        $b = $db->table($this->table);
        $b->select('subkriteria.*');
        $b->select('kriteria.kriteria');
        $b->join('kriteria', 'kriteria.id = subkriteria.id_kriteria');
        $b->orderBy('kriteria.kriteria', 'asc');
        return $b->get()->getResultArray();
    }
}
