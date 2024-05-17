<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ContactController
{
    public function index(){
        return view("frontend.contact");
    }
}
