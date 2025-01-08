<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    public function index()
    {
        return view('/dokter/home');
    }
    public function artikel()
    {
        return view('/dokter/artikel');
    }
    public function puskeswan()
    {
        return view('/dokter/daftarpuskeswan');
    }

    public function chat()
    {
        return view('/dokter/chat');
    }

    
}
