<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaAksesModel extends Model
{
    protected $table      = 'pengguna_akses';
    protected $primaryKey = 'id';

    protected $useTimestamps = false;
    protected $allowedFields = [];

    public function getAll($arr = [])
    {
        $builder = $this->db->table('pengguna_akses');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getResult();
    }

    public function getFirst($arr)
    {
        $builder = $this->db->table('pengguna_akses');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getRow();
    }
}
