<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\PenggunaAksesModel;
use App\Models\AksesModel;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['username', 'email', 'password', 'fullname', 'usertype', 'phone_num', 'no_ic'];

    public function getAll($arr = [])
    {
        $this->penggunaAksesModel = new PenggunaAksesModel();
        $this->aksesModel = new AksesModel();

        $builder = $this->db->table('users');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        $items = $builder->get()->getResult();

        foreach ($items as $item) {
            $item->akses = [];
            $subs = $this->penggunaAksesModel->getAll(['id_pengguna' => $item->id]);
            if (!empty($subs)) {
                $item->akses = $this->aksesModel->getAllWhereIn(array_column($subs, 'id_akses'));
            }
        }
        return $items;
    }

    public function getFirst($arr)
    {
        $builder = $this->db->table('users');
        $builder->select('*');

        foreach ($arr as $key => $item) {
            $builder->where($key, $item);
        }

        return $builder->get()->getRow();
    }
}
