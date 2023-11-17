<?php

namespace App\Controllers;

use App\Models\Db_login;

//SYARAT PERTAMA OOP -> CLASS
class School extends BaseController{
//syarat kedua oop -> object
    protected $login;
    
    public function __construct(){
        $this->login = new Db_login();
    }

    public function index() : string{
        return view('lihat');
    }

    public function aksi_registration(){
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $nama = $this->request->getVar('nama');

        $data = array(
            "username" => $username,
            "password" => md5($password),
            "role" => "1",
            "nama" => $nama
        );

        $insert = $this->login->daftar($data);

        if($insert)
            echo "Pendaftaran berhasil <a href='".base_url('login')."'> Kembali </a> ";
        else
            echo "ERRRRRRRROR";
    }

    public function aksi_login(){
        // $username = $_POST['username'];
        // $password = $_POST['password'];
        $username = $this->request->getVar('username');
        $password = md5($this->request->getVar('password'));

        $cek_login = $this->login->cek_login($username, $password);

        if($cek_login > 0)
            echo "Username dan password benar";
        else
            echo "Username dan password salah";

    }

}