<?php

namespace App\Controllers\Auth;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class ForgotPasswordController extends ResourceController
{

    protected $users;

    function __construct()
    {
        $this->users = new UsersModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $data['title'] = 'Forgot Password';

        return view('auth/forgotpassword', $data);
    }

    public function sendResetLink()
    {
        // Ambil email dari input pengguna
        $email = $this->request->getVar('email');

        // Periksa apakah email pengguna ada dalam database
        $data = $this->users->where('email', $email)->first();

        if ($data) {
            // Generate token reset password
            $token = substr(sha1(rand()), 0, 30);

            // Simpan token dalam database
            $this->users->update($data['id'], ['reset_token' => $token]);

            // Langsung redirect apabila ada email yang terdaftar di database
            return redirect()->to('UpdatePassword/' . $token);

        }

        // Jika email tidak ditemukan, tampilkan pesan error
        session()->setFlashdata('error', 'Email tidak ditemukan.');
        return redirect()->to('ForgotPassword');
    }

   
}
