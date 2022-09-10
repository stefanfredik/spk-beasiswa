<?php

namespace App\Controllers;

class Home extends BaseController {
    public function index() {
        $data = [
            'title' => 'Data Siswa',
            'url'   => [
                'parent' => 'home'
            ]
        ];

        return view('admin/index', $data);
    }
}
