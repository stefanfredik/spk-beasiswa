<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kriteria extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],
            'kriteria' => [
                'type'  => 'VARCHAR',
                'constraint'    => '32',
            ],
            'bobot' => [
                'type'  => 'FLOAT',
            ],
            'keterangan' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64'
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('kriteria');
    }

    public function down() {
        $this->forge->dropTable('kriteria');
    }
}
