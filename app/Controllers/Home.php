<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function testDB()
{
    $db = \Config\Database::connect();

    if ($db->connect()) {
        echo "Berhasil terhubung ke database!";
    } else {
        echo "Gagal terhubung ke database!";
    }
}

}
