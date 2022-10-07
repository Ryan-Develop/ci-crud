<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AsalSekolahModel;

class AsalSekolah extends BaseController
{
    protected $asal_sekolah_Model;

    public function __construct()
    {
        $this->asal_sekolah_Model = new AsalSekolahModel();
    }

    public function index()
    {
        // $mahasiswa = $this->mahasiswaModel->findAll();
        $data = [
            'title' => 'Daftar Mahasiswa',
            'asal_sekolah' => $this->asal_sekolah_Model->getAsalSekolah()
        ];

        // cara konek db tanpa model
        // $db = \Config\Database::connect();
        // $mhs = $db->query("SELECT * FROM tbl_mhs");
        // foreach ($mhs->getResultArray() as $row) {
        //     d($row); 
        // }

        return view('asal_sekolah/index', $data);
    }

    public function detail($id)
    {
        $data = [
            'title' => 'Detail Nama Sekolah',
            'asal_sekolah' => $this->asal_sekolah_Model->getAsalSekolah($id)
        ];

        if (empty($data['asal_sekolah'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Sekolah Dengan Nama ' . $id . ' Tidak Ditemukan');
        }
        return view('asal_sekolah/detail', $data);
    }
}
