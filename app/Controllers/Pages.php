<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Karya Gg. Ambarsari No.3',
                    'kota' => 'Medan'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Kolam No.1 Medan Estate',
                    'kota' => 'Medan'
                ]
            ]
        ];

        return view('pages/contact', $data);
    }
}
