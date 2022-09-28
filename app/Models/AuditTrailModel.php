<?php

namespace App\Models;

use CodeIgniter\Model;

class AuditTrailModel extends Model
{
    protected $table      = 'audit_trails';
    protected $primaryKey = 'id';

    protected $useTimestamps = false;
    protected $allowedFields = [];

    // get all records
    public function getAll($arr = [])
    {
        $builder = $this->db->table('audit_trails');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getResult();
    }
}
