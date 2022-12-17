<?php

namespace App\Database\Seeds;

use App\Models\MyUserModel;
use CodeIgniter\Database\Seeder;
use \Myth\Auth\Password;

class UserSeeder extends Seeder {
    public function run() {

        $group = [
            [
                "name" => "Admin",
                "description" => "Admin",
            ],
            [
                "name" => "kepala-sekolah",
                "description" => "Kepala Sekolah",
            ]
        ];

        $this->db->table('auth_groups')->insertBatch($group);

        $user = [
            'nama_user' => 'Admin',
            'username' => 'admin',
            'password_hash' => Password::hash("12345678"),
            'active'    => "1"
        ];

        $userModel = new MyUserModel();
        $userModel->withGroup("Admin")->save($user);
    }
}
