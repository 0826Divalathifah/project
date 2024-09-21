<?php

namespace App\Http\Controllers;

class auth extends Controller
{
    public function login()
    {
        return view('admin.adminkelurahan.samples.login'); 
    }

    public function register()
    {
        return view('admin.adminkelurahan.samples.register'); 
    }
}
