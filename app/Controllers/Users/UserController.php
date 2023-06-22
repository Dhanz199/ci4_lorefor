<?php

namespace App\Controllers\Users;

use App\Models\UsersModel;
use CodeIgniter\RESTful\ResourceController;

class UserController extends ResourceController
{
    protected $users;

    function __construct()
    {
        $this->users = new UsersModel();
    }

    public function index()
    {

        $data['users'] = $this->users->orderBy('nama', 'ASC')->findAll();
     
        return view('User/dashboard', $data);
    }
}
