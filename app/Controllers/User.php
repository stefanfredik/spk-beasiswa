<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;

class User extends BaseController {
    use ResponseTrait;
    public function __construct() {
        $this->UserModel = new UserModel();
        $this->point =  'user';
    }

    public function index() {
        $data = [
            'title' => "Data User",
            'dataUser' => $this->UserModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view("user/index", $data);
    }

    public function table() {
        $data = [
            'dataUser' => $this->UserModel->findAll(),
            'url'       => [
                'parent'    => $this->point
            ]
        ];

        return view('/user/table', $data);
    }

    public function save($id = null) {
        if ($id == null) {
            $rules = [
                'username'  => [
                    'rules'  => 'required|is_unique[user.username]',
                    'errors' => [
                        'is_unique' => 'Username sudah terdaftar.'
                    ]
                ],
                'password' => [
                    'rules' => 'required|min_length[8]',
                    'errors' => [
                        'min_length' => 'Password minimal 8 Digit.'
                    ]
                ],
                'password2' => [
                    'rules' => 'required|matches[password]',
                    'errors' => [
                        'matches' => 'Password tidak sama'
                    ]
                ]
            ];

            if (!$this->validate($rules)) {

                $res = [
                    'status' => 'error',
                    'error' => $this->validation->getErrors()
                ];

                return $this->respond($res);
            }

            $request = $this->request->getPost();

            $data = [
                'nama_user' => $request['nama_user'],
                'jabatan' => $request['jabatan'],
                'username' => $request['username'],
                'password' => password_hash($request['password'], PASSWORD_DEFAULT),
                'last-login' => '',
            ];
            $this->UserModel->save($data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil menambah Data.',
            ];

            return $this->respond($res, 200);
        } else {
            $rules = [
                'username'  => [
                    'rules'  => 'is_unique[user.username]',
                    'errors' => [
                        'is_unique' => 'Username sudah terdaftar.'
                    ]
                ],
                // 'password' => [
                //     'rules' => 'min_length[10]',
                //     'errors' => [
                //         'min_length' => 'Password minimal 8 Digit.'
                //     ]
                // ]
            ];

            if (!$this->validate($rules)) {

                $res = [
                    'status' => 'error',
                    'error' => $this->validation->getErrors()
                ];

                return $this->respond($res);
            }



            $data = $this->request->getPost();
            $this->UserModel->update($id, $data);

            $res = [
                'status'    => 'success',
                'msg'     => 'Berhasil mengedit Data.',
            ];

            return $this->respond($res, 200);
        }
    }

    public function tambah() {
        $data = [
            'title' => "Data Siswa"
        ];

        return view('/user/tambah', $data);
    }

    public function delete($id) {
        $this->UserModel->delete($id);

        $res = [
            'status'    => 'success',
            'msg'     => 'Berhasil menghapus Data.',
        ];

        return $this->respond($res, 200);
    }

    public function get($id) {
        $data = [
            "title" => "Edit Data User",
            "user" => $this->UserModel->find($id)
        ];

        return view("/user/edit", $data);
    }
}
