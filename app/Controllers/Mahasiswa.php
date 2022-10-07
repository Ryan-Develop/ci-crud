<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
    protected $mahasiswaModel;

    public function __construct()
    {
        $this->mahasiswaModel = new MahasiswaModel();
    }

    public function index()
    {
        // $mahasiswa = $this->mahasiswaModel->findAll();
        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa()
        ];

        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $mhs = $db->query("SELECT * FROM tbl_mhs");
        // foreach ($mhs->getResultArray() as $row) {
        //     d($row); 
        // }

        return view('mahasiswa/index', $data);
    }

    public function detail($nim)
    {
        $data = [
            'title' => 'Detail Mahasiswa',
            'mahasiswa' => $this->mahasiswaModel->getMahasiswa($nim)
        ];

        if (empty($data['mahasiswa'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Mahasiswa Dengan NIM ' . $nim . ' Tidak Ditemukan');
        }
        return view('mahasiswa/detail', $data);
    }
}
