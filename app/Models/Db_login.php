<?php

namespace App\Models;
use CodeIgniter\Model;

class Db_login extends Model{
    function cek_login($username, $password){
        $query = $this->db->table("user")
                 ->select("*")
                 ->where("username = '$username' AND password = '$password'")
                 ->countAllResults();

        return $query;
    }

    function daftar($data){
        $query = $this->db->table("user")
                ->insert($data);
        return $query;
    }
}