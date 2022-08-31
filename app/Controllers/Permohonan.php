<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Permohonan extends Controller
{
    public function index()
    {
        return view('permohonan/index');
    }

    public function create()
    {
        return view('permohonan/create');
    }

    public function show($id)
    {
        return view('permohonan/show');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function save()
    {
    }
}
