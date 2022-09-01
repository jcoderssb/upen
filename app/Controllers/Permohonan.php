<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Permohonan extends BaseController
{
  public function index()
    {
        $senaraiPermohonan = $this->permohonanModel->findAll();

        return view('permohonan/index', compact('senaraiPermohonan'));
    }

    public function create()
    {
        return view('permohonan/create');
    }

    public function show($id)
    {
        $permohonan = $this->permohonanModel->find($id);
        $senaraiTanggungan = $this->tanggunganModel->findAll($permohonan['id']);

        return view('permohonan/show', compact('permohonan', 'senaraiTanggungan'));
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function save()
    {
        $this->permohonanModel->insert([
            'nokp_pemohon' => $this->request->getPost('nokp_pemohon'),
            'nama_pemohon' => $this->request->getPost('nama_pemohon'),
            'taraf_perkahwinan' => $this->request->getPost('taraf_perkahwinan'),
            'created_at' => now(),
            'pekerjaan_pemohon' => $this->request->getPost('pekerjaan_pemohon'),
            'pendapatan_pemohon' => $this->request->getPost('pendapatan_pemohon'),
            'nama_pasangan' => $this->request->getPost('nama_pasangan'),
            'nokp_pasangan' => $this->request->getPost('nokp_pasangan'),
            'pekerjaan_pasangan' => $this->request->getPost('pekerjaan_pasangan'),
            'pendapatan_pasangan' => $this->request->getPost('pendapatan_pasangan')
        ]);

        session()->setFlashdata('success', 'Permohonan berjaya dihantar!');
        return redirect()->to('/permohonan');
    }
}
