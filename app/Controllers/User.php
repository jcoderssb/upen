<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        $senaraiPegawai = $this->userModel->getAll(['usertype' => 2]);
        $senaraiPemohon = $this->userModel->getAll(['usertype' => 3]);

        return view('users/index', compact('senaraiPegawai', 'senaraiPemohon'));
    }
}
