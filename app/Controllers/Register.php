<?php

namespace App\Controllers;

class Register extends BaseController
{
    public function index()
    {
        return view('register');
    }

    public function save()
    {
        $this->userModel->insert([
            'username' => $this->request->getPost('username'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
            'fullname' => $this->request->getPost('fullname'),
            'usertype' => 2
        ]);

        session()->setFlashdata('success', 'Akaun berjaya didaftar!');
        return redirect()->to('/login');
    }
}
