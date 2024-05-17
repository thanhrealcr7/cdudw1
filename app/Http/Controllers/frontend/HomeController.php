<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class HomeController
{
    public function index(){
        return view("frontend.home");
    }
}
