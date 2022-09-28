<?php

namespace App\Models;

use CodeIgniter\Model;

class UserTypeModel extends Model
{
    protected $table      = 'users_type';
    protected $primaryKey = 'id';

    protected $useTimestamps = false;
    protected $allowedFields = [];

    public function getFirst($arr)
    {
        $builder = $this->db->table('users_type');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getRow();
    }
}
