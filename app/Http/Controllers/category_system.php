<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class category_system extends Controller
{
    public function index(){
        return view('admin.content.category');
    }

    public function category_child(){
    	return view('admin.content.category_child');
    }

}
