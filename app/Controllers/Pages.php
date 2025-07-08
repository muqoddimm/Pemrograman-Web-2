<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Unipdu Press',
            'tes' => ['satu', 'dua', 'tiga']
        ];
        return view('pages/home');
    }

    public function contact()
    {
        // Data yang akan dilewatkan ke view
        $data = [
            'title' => 'Contact Us | Unipdu Press', // Opsional, untuk title halaman
            'alamat' => [ // Ini adalah variabel $alamat yang dibutuhkan oleh view
                [
                    'tipe'   => 'Kantor Pusat',
                    'alamat' => 'Jl. Raya Jombang-Surabaya KM 1, Cukir',
                    'kota'   => 'Jombang'
                ],
                [
                    'tipe'   => 'Cabang Jakarta',
                    'alamat' => 'Jl. Sudirman No. 123',
                    'kota'   => 'Jakarta'
                ],
                [
                    'tipe'   => 'Cabang Surabaya',
                    'alamat' => 'Jl. Diponegoro No. 45',
                    'kota'   => 'Surabaya'
                ]
            ]
        ];

        // Memuat view contact.php dan melewatkan variabel $data
        return view('pages/contact', $data);
    }
    public function about()
    {

        return view('pages/about');
    }
}
