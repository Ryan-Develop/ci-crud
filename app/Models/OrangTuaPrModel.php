<?php

namespace App\Models;

use CodeIgniter\Model;

class OrangTuaPrModel extends Model
{
    protected $table = 'tbl_ibu';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nik', 'jenis_kelamin', 'agama', 'ttl', 'pekerjaan', 'pendidikan_terakhir'];

    public function getOrangTuaPr($nik = false)
    {
        if ($nik == false) {
            return $this->findAll();
        }
        return $this->where(['nik' => $nik])->first();
    }
}
