<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaMigration extends Migration {
    public function up() {
        $data = [
            'id' => [
                'type'  => 'INT',
                'auto_increment'    => TRUE
            ],
            'nisn' => [
                'type'  => 'VARCHAR',
                'constraint'    => '15',
            ],
            'nama_siswa' => [
                'type'  => 'VARCHAR',
                'constraint'    => '64',
            ],
            'jenis_kelamin' => [
                'type'  => 'VARCHAR',
                'constraint'    => '35'
            ],
            'alamat'    => [
                'type' => 'VARCHAR',
                'constraint'  => 30
            ],
            'kelas'    => [
                'type' => 'VARCHAR',
                'constraint'  => 30
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down() {
        $this->forge->dropTable('siswa');
    }
}
