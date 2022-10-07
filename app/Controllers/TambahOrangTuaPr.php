<?php

namespace App\Controllers;

// use App\Models\OrangTuaLkModel;
use App\Models\OrangTuaPrModel;
use App\Controllers\BaseController;

class TambahOrangTuaPr extends BaseController
{
    protected $orangtua_pr_Model;

    public function __construct()
    {
        $this->orangtua_pr_Model = new OrangTuaPrModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Form Tambah Data Orang Tua / Wali'
        ];
        return view('orangtua_pr/create', $data);
    }

    public function save()
    {
        $this->orangtua_pr_Model->save([
            'nama' => $this->request->getVar('nama'),
            'nik' => $this->request->getVar('nik'),
            'agama' => $this->request->getVar('agama'),
            'ttl' => $this->request->getVar('ttl'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'pendidikan_terakhir' => $this->request->getVar('pendidikan_terakhir'),
        ]);

        // session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan.');

        return redirect()->to('orangtua_pr');
    }
}
