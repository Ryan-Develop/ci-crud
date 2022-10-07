<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AsalSekolahModel;

class TambahAsalSekolah extends BaseController
{
    protected $asal_sekolah_Model;

    public function __construct()
    {
        $this->asal_sekolah_Model = new AsalSekolahModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Form Tambah Data Sekolah'
        ];
        return view('asal_sekolah/create', $data);
    }

    public function save()
    {
        $this->asal_sekolah_Model->save([
            'id' => $this->request->getVar('id'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'status_sekolah' => $this->request->getVar('status_sekolah'),
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('asal_sekolah');
    }
}
