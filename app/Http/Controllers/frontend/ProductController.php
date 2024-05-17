<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;

class ProductController
{
    public function index(){
        return view("frontend.products");
    }
    
    public function product_detail($slug){
        return view("frontend.product_detail");
    }
}

