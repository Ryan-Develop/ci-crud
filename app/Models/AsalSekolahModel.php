<?php

namespace App\Models;

use CodeIgniter\Model;

class AsalSekolahModel extends Model
{
    protected $table = 'tbl_sekolah';
    protected $useTimestamps = true;
    protected $allowedFields = ['id', 'nama_sekolah', 'alamat_sekolah', 'status_sekolah'];

    public function getAsalSekolah($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['id' => $id])->first();
    }
}
