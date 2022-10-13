<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TahapBeasiswaMigration extends Migration {
    public function up() {

        $data = [
            'id' => [
                'type'              => 'INT',
                'auto_increment'    => true
            ],
            'tahap' => [
                'type'      => 'VARCHAR',
                'constraint' => '20'
            ],
            'jumlah'    => [
                'type' => 'INT'
            ],
            'keterangan' => [
                'type' => 'VARCHAR',
                'constraint' => '128'
            ]
        ];

        $this->forge->addField($data);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tahapbeasiswa');
    }

    public function down() {
        $this->forge->dropTable('tahapbeasiswa');
    }
}
