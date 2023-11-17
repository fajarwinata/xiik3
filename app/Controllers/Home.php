<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('pages/dashboard');
        //HARUS SAMA DENGAN NAMA FILE DI VIEWS!!!!!!!
    }

    public function kosong(){
        return view('pages/kosong');
    }

    public function wilayah(){
        return view('pages/wilayah');
    }
}
