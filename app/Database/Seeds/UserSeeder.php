<?php

namespace App\Database\Seeds;

use App\Models\MyUserModel;
use CodeIgniter\Database\Seeder;
use \Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {

        $group = [
            [
                "name" => "Admin",
                "description" => "Admin Groups",
            ],
            [
                "name" => "Kepala Sekolah",
                "description" => "Kepala Sekolah",
            ]
        ];

        // $this->db->query('INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)', $group);

        // $group = [
        //     "name" => "Kepala Sekolah",
        //     "description" => "Kepala Sekolah",
        // ];

        // $this->db->query('INSERT INTO auth_groups (name, description) VALUES(:name:, :description:)', $group);

        // Using Query Builder
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
