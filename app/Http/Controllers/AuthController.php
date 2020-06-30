<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('register');
    }

    public function showSelamat(Request $request)
    {
        
        return view('selamat', ['namaDepan' => $request->first_name, 'namaBelakang' => $request->last_name]);
        
    }
}
