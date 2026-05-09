<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function profil()
    {
        return view('profil');
    }

    public function kontak()
    {
        return view('kontak');
    }
}