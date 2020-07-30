<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category_shop extends Controller
{
    public function index(){
       return view('admin.content.category_shop');
    }

    public function foods(){
       return view('admin.content.foods');
    }
}
