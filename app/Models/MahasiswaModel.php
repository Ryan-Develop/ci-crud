<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table = 'tbl_mhs';
    protected $useTimestamps = true;
    protected $allowedFields = ['nama', 'nim', 'jenis_kelamin', 'agama', 'prodi', 'ttl', 'alamat', 'asal_sekolah', 'gambar'];

    public function getMahasiswa($nim = false)
    {
        if ($nim == false) {
            return $this->findAll();
        }
        return $this->where(['nim' => $nim])->first();
    }
}
