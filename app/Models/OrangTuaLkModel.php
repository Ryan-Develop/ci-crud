<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaLkModel extends Model
{
    protected $table = 'tbl_ayah';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nik', 'jenis_kelamin', 'agama', 'ttl', 'pekerjaan', 'pendidikan_terakhir'];

    public function getOrangTuaLk($nik = false)
    {
        if ($nik == false) {
            return $this->findAll();
        }
        return $this->where(['nik' => $nik])->first();
    }
}
