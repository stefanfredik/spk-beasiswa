<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PesertaMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],
            'nisn' => [
                'type'  => 'INT',
                'constraint'    => '32',
            ],
            'penghasilan' => [
                'type'  => 'FLOAT',
            ],
            'tanggungan' => [
                'type'  => 'INT',
            ],
            'nilai' => [
                'type'  => 'FLOAT',
            ],
            'yatimpiatu' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64'
            ],
        ];


        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('peserta');
    }

    public function down() {
        $this->forge->dropTable('peserta');
    }
}
