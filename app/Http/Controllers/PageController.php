<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama: [Ivan Rizal], NIM: [2341760128]';
    }

    public function articles($id)
    {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}