<?php

namespace App\Controllers\Auth;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class RegisterController extends ResourceController
{

    protected $users;

    function __construct()
    {
        $this->users = new UsersModel();
    }
    public function index()
    {
        $data['title'] = 'Register';

        return view('auth/register', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'username' => [
                'rules' => 'required|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'email' => [
                'rules' => 'required|is_unique[users.email]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'is_unique' => 'Email sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus diisi',
                ]
            ],
            'repassword' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'photo' => [
                'rules' => 'uploaded[photo]|max_size[photo,1024]|is_image[photo]|mime_in[photo,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'Pilih Gambar Terlebih dahulu',
                    'max_size' => 'Ukuran Gambar terlalu besar',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang anda pilih bukan gambar',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('photo');

        if ($file->isValid() && !$file->hasMoved()) {
            // Generate nama file unik
            $gambar = $file->getRandomName();

            // Pindahkan file ke folder tujuan
            $file->move('./uploads', $gambar);

            $data = [
                'nama' => $this->request->getPost('nama'),
                'email' => $this->request->getPost('email'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'repassword' => $this->request->getPost('repassword'),
                'photo' => $gambar,
            ];

            if ($this->users->save($data)) {
                session()->setFlashdata('message', 'Akun berhasil terdaftar Silahkan Masuk Ke aplikasi');
                return redirect()->to('/');
            }
        }
    }
}
