<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard_Controller extends Controller
{
    public function index(){
        return view('dashboard.dashboard', [
            "halaman" => "Dashboard"
        ]);
    }
}
