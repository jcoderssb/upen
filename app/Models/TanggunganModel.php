<?php

namespace App\Models;

use CodeIgniter\Model;

class TanggunganModel extends Model
{
    protected $table      = 'tanggungan';
    protected $primaryKey = 'id';

    protected $useTimestamps = false;

    protected $allowedFields = ['id_permohonan', 'nama', 'nokp', 'umur', 'hubungan'];
}
