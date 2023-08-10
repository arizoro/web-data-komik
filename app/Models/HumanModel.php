<?php

namespace App\Models;

use CodeIgniter\Model;

class HumanModel extends Model
{
    protected $table = 'human';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama' , 'email', 'alamat' ];

    public function search($keyword){
        // $builder = $this->table('human');
        // $builder->like('nama', $keyword);
        // return $builder;

        return $this->table('human')->like('nama',$keyword)->orLike('alamat' ,$keyword);
    }
}