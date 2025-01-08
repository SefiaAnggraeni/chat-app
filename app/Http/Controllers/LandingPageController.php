<?php

namespace App\Http\Controllers;

use App\Models\shelter;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landing() {
      
        $data = shelter::all();
        // dd($data);
        return view('landing', compact('data'));
    }
   

}

