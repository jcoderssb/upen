<?php

namespace App\Models;

use CodeIgniter\Model;

class AksesModel extends Model
{
    protected $table      = 'akses';
    protected $primaryKey = 'id';

    protected $useTimestamps = false;
    protected $allowedFields = [];

    // get all records
    public function getAll($arr = [])
    {
        $builder = $this->db->table('akses');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getResult();
    }

    // get one record
    public function getFirst($arr)
    {
        $builder = $this->db->table('akses');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getRow();
    }

    public function getAllWhereIn($arr)
    {
        $builder = $this->db->table('akses');
        $builder->select('*');
        $builder->whereIn('id', $arr);

        return $builder->get()->getResult();
    }
}
