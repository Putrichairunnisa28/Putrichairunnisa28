<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('layout');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function menu()
    {
        return view('menu');
    }
    public function user()
    {
        return view ('user');
    }
    public function pesan()
    {
        return view ('pesan');
    }
}
