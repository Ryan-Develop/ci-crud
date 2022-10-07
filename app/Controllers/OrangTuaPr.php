<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use App\Models\OrangTuaLkModel;
use App\Models\OrangTuaPrModel;

class OrangTuaPr extends BaseController
{
    // protected $orangtua_lk_Model;
    protected $orangtua_pr_Model;

    public function __construct()
    {
        // $this->orangtua_lk_Model = new OrangTuaLkModel();
        $this->orangtua_pr_Model = new OrangTuaPrModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Daftar Orang Tua / Wali',
            // 'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk()
            'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr()

        ];

        return view('orangtua_pr/index', $data);
    }

    public function detail($nik)
    {
        $data = [
            'title' => 'Detail Orang Tua / Wali',
            // 'orangtua_lk' => $this->orangtua_lk_Model->getOrangTuaLk($nik)
            'orangtua_pr' => $this->orangtua_pr_Model->getOrangTuaPr($nik)
        ];

        if (empty($data['orangtua_pr'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Nama Orang Tua Dengan NIK ' . $nik . ' Tidak Ditemukan');
        }
        return view('orangtua_pr/detail', $data);
    }
}
