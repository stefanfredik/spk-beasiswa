<?php

namespace App\Models;

use CodeIgniter\Model;

class NilaiModel extends Model {
    protected $DBGroup          = 'default';
    protected $table            = 'nilais';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [];
}
