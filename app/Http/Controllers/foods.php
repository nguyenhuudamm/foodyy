<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_foods;
class foods extends Controller
{
    public function foods(){
       return view('admin.content.foods');
    }

    public function test(){
    	echo 'hello';
    }

    public function uploadFile(Request $request){
    	if($request->hasFile('files')){
    		$files = $request->file('files');
    		$array = array();
    		foreach ($files as $value) {
    			 //$new_Name = 'foody_img_'.rand().'.'.$value->getClientOriginalExtension();
    			 $new_Name = $value->getClientOriginalName();
    			 $value->move(public_path('image/foodys'), $new_Name);
    			array_push($array, $new_Name);
    		}
    		echo json_encode($array);
    	}
    }
}
