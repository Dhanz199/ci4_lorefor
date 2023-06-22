<?php

namespace App\Controllers\Auth;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class UpdatePasswordController extends ResourceController
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
        return view('auth/resetpassword');
    }

    public function resetPassword($token)
    {
        // Cek apakah token reset password valid
        $data = $this->users->where('reset_token', $token)->first();

        if ($data) {
            // Tampilkan halaman reset password dengan token yang valid
            return view('auth/resetpassword', ['token' => $token]);
        }

        // Jika token tidak valid, tampilkan pesan error
        session()->setFlashdata('error', 'Token reset password tidak valid.');
        return redirect()->to('ForgotPassword');
    }

    public function updatePassword()
    {
        $userModel = new UsersModel();

        // Ambil token dan password baru dari input pengguna
        $token = $this->request->getPost('token');
        $password = password_hash($this->request->getVar('password'), PASSWORD_BCRYPT);

        // Cek apakah token reset password valid
        $user = $userModel->where('reset_token', $token)->first();

        if ($user) {
            // Update password pengguna
            $userModel->update($user['id'], ['password' => $password, 'reset_token' => null]);

            // Tampilkan pesan sukses
            session()->setFlashdata('message', 'Password berhasil diperbarui.');
            return redirect()->to('/');
        }

        // Jika token tidak valid, tampilkan pesan error
        session()->setFlashdata('error', 'Token reset password tidak valid.');
        return redirect()->to('ForgotPassword');
    }
}
