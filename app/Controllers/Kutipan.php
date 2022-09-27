<?php

namespace App\Controllers;

class Kutipan extends BaseController
{
    public function index()
    {
        $senaraiPermohonan = $this->permohonanModel->findAll();

        return view('kutipan/index', compact('senaraiPermohonan'));
    }

    public function create()
    {
        return view('kutipan/create');
    }

    public function show($id)
    {
        $permohonan = $this->permohonanModel->find($id);
        $senaraiTanggungan = $this->tanggunganModel->where('id_permohonan', $permohonan['id'])->findAll();

        return view('kutipan/show', compact('permohonan', 'senaraiTanggungan'));
    }

    public function save()
    {
        $id_permohonan = $this->permohonanModel->insert([
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

        if ($this->request->getPost('total_tanggungan') != null) {
            for ($i = 0; $i < (int) $this->request->getPost('total_tanggungan'); $i++) {
                $this->tanggunganModel->insert([
                    'id_permohonan' => $id_permohonan,
                    'nama' => $this->request->getPost('nama_tanggungan' .  $i),
                    'nokp' => $this->request->getPost('nokp_tanggungan' . $i),
                    'hubungan' => $this->request->getPost('hubungan_tanggungan' . $i),
                ]);
            }
        }

        session()->setFlashdata('success', 'Permohonan berjaya dihantar!');
        return redirect()->to('/permohonan');
    }
}
