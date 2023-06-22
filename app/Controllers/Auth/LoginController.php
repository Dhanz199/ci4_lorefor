<?php

namespace App\Controllers\Auth;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class LoginController extends ResourceController
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
        if (session('logged_in')) {
            return redirect()->to(site_url('/User'));
        }

        $data['title'] = 'Login';
        return view('auth/login', $data);
    }

    public function process()
    {
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $this->users->where('email', $email)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                    'id'       => $data['id'],
                    'nama'     => $data['nama'],
                    'email'    => $data['email'],
                    'logged_in'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/User');
            } else {
                session()->setFlashdata('error', 'Password Salah');
                return redirect()->to('/');
            }
        } else {
            session()->setFlashdata('error', 'Email not Found');
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy('logged_in');
        return redirect()->to('/');
    }
}
