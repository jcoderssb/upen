<?php

namespace App\Models;

use CodeIgniter\Model;

class PermohonanModel extends Model
{
    protected $table      = 'kutipan';
    protected $primaryKey = 'id';

    protected $useTimestamps = false;

    protected $allowedFields = ['nokp_pemohon', 'nama_pemohon', 'taraf_perkahwinan', 'created_at', 'pekerjaan_pemohon', 'pendapatan_pemohon', 'nama_pasangan', 'nokp_pasangan', 'pekerjaan_pasangan', 'pendapatan_pasangan'];
}
