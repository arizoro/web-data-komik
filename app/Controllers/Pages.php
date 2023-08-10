<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {

        $data =[
            'tittle' => 'Ari CI Web',
            
        ];

        return view('pages/home',$data);
    }

    public function about()
    {
        $data =[
            'tittle' => 'About Us'
        ];

        return view('pages/about',$data);
    }

    public function contact()
    {
        $data = [
            'tittle' => 'Contact Us',
            'addres' =>[
                [
                    'nama' => 'josh ghandos',
                    'tempat' => 'Rumah',
                    'alamat' => 'Jl. Manggis No.21 Jaksel',
                    'contact' => 'jos@gmail.com'
                ],
                [
                    'nama' => 'Sigit Sahaja',
                    'tempat' => 'Rumah',
                    'alamat' => 'Jl. Mangga No.11 Jaktim',
                    'contact' => 'Supersigit@gmail.com'
                ]
            ]
        ];

        return view('pages/contact',$data);
    }
}
