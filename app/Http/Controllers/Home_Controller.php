<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_Controller extends Controller
{
    public function index(){
        return view('welcome', [
            "halaman" => "Welcome Page"
        ]);
    }
}
