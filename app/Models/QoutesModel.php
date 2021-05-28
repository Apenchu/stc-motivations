<?php

namespace App\Models;

use CodeIgniter\BaseModel;
use CodeIgniter\Model;

class QoutesModel extends Model
{
    protected $table = 'motivation';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul-thumbnail', 'isi', 'judul-qoutes', 'bagian1', 'bagian2', 'bagian3', 'bagian4', 'instagram'];

    public function getQoutes($id)
    {
        if ($id == false) {
            return  $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
