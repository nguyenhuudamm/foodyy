<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\model_foods;
use App\model_tab_child;
use App\model_active_shops;
use App\model_tabs;
use App\model_shop;
use App\model_quantitative;
use App\model_tabs_food;
use App\model_time_has_foods;
use App\model_ingredient;
class foods extends Controller
{
    public function foods(){
        $tab_id = 1;
        $shop_id = 1;
        // tag child
        $tab_childs = model_tabs::find($tab_id)->tab_child;
        $data['tab_childs'] = $tab_childs;
        // thời gian hoạt động của shop
        $active_shop = model_shop::find($shop_id)->active_shops;
        $data['active_shop'] = $active_shop;
        // menu shop
        $menu_shop = model_shop::find($shop_id)->menu_foods;
        $data['menu_shop'] = $menu_shop;
        // bảng thành phần thực phẩm
        $quantitative = model_quantitative::all();
        $data['quantitative'] = $quantitative;

        // danh sách món ăn
        $list_food = model_foods::all();
        $data['list_food'] = $list_food;
        // foreach ($list_food as $value) {
        //     echo $value->name;
        // }
        return view('admin.content.foods', $data);
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

    public function fetch_view_modal(){
        $html = view('admin.returnView.modal_add_food');
        echo $html;
    }

    public function addFood(Request $request){
        $shop_id = 1;
        // xu li trang thai
        $status = $request->get('status_food'); // on = 1  & '' = 0
        if($status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
        $food = new model_foods();
        $food->menu_food_id = $request->get('menu_food');
        $food->shop_id = $shop_id;
        $food->name = $request->get('name_food');
        $food->unsigned_name = convert_TViet_nosign($request->get('name_food'));
        $food->description = $request->get('detail_food');
        $food->price = $request->get('price_food');
        $food->image = $request->get('img_food');
        $food->image_details = $request->get('imgs_food');
        $food->status = $status;
        
        if($food->save()){
           $food_id = $food->id;

            //xu li tabs
            $tabs_food = $request->input('tabs_food');

            foreach ($tabs_food as $value) {
                $row_tabs_food = new model_tabs_food();
                $row_tabs_food->food_id = $food_id;
                $row_tabs_food->tab_id = ($value);
                $row_tabs_food->save();
            }
        
            // xử lí thời gian có thức ăn
            $session_food = $request->input('session_food');
            $start_time = $request->input('start_time');
            $end_time = $request->input('end_time');
            $i = 0;
            foreach ($session_food as $value){
                $row_time_has_foods = new model_time_has_foods();
                $row_time_has_foods->food_id = $food_id;
                $row_time_has_foods->start_time = $start_time[$i];
                $row_time_has_foods->end_time = $end_time[$i];
                $i++;
                $row_time_has_foods->save();
            }
            //xu li thành phần  model_ingredient
            if($request->input('tp_food')){
                $tp_food = $request->input('tp_food');
                $g_food = $request->input('gfood');
                $i = 0;
                foreach ($tp_food as $value) {
                    $name_ingredient = model_quantitative::find($value);
                    $row_ingredient = new model_ingredient();
                    $row_ingredient->food_id = $food_id;
                    $row_ingredient->quantitative_id = $value;
                    $row_ingredient->name = $name_ingredient->name;
                    $row_ingredient->weight = $g_food[$i];
                    $row_ingredient->save();
                    $i++;
                }
            }
            $output = array(
                'success' => true,
                'food' => $food
            );
        }else{
           $output = array(
                'success' => false
            );
        }
        echo json_encode($output);
    }

    public function updateFood(Request $request){
        $food_id = $request->get('id_food');
        //$id = 59;
        $food = model_foods::find($food_id);
        // xu li trang thai
        $status = $request->get('status_food'); // on = 1  & '' = 0
        if($status == 'on'){
            $status = 1;
        }else{
            $status = 0;
        }
       
        $food->menu_food_id = $request->get('menu_food');
        $food->name = $request->get('name_food');
        $food->unsigned_name = convert_TViet_nosign($request->get('name_food'));
        $food->description = $request->get('detail_food');
        $food->price = $request->get('price_food');
        $food->image = $request->get('img_food');
        $food->image_details = $request->get('imgs_food');
        $food->status = $status;
        $food->save();

        //xóa time_has_food
        $time_has_foods = $food->time_has_foods;
        foreach ($time_has_foods as $value) {
            $value->delete();
        }
        //xóa tab_food
        $tab_foods = $food->tab_foods;
        foreach ($tab_foods as $value) {
            $value->delete();
        }
        //xóa thành phần
        $ingredient_foods = $food->ingredient_foods;
        foreach ($ingredient_foods as $value) {
            $value->delete();
        }

        // thêm time_has_food
        $session_food = $request->input('session_food');
            $start_time = $request->input('start_time');
            $end_time = $request->input('end_time');
            $i = 0;
            foreach ($session_food as $value){
                $row_time_has_foods = new model_time_has_foods();
                $row_time_has_foods->food_id = $food_id;
                $row_time_has_foods->start_time = $start_time[$i];
                $row_time_has_foods->end_time = $end_time[$i];
                $i++;
                $row_time_has_foods->save();
            }
        // thêm tab_foods
        $tabs_food = $request->input('tabs_food');

        foreach ($tabs_food as $value) {
            $row_tabs_food = new model_tabs_food();
            $row_tabs_food->food_id = $food_id;
            $row_tabs_food->tab_id = ($value);
            $row_tabs_food->save();
        }
        // thêm thành phần
        if($request->input('tp_food')){
            $tp_food = $request->input('tp_food');
            $g_food = $request->input('gfood');
            $i = 0;
            foreach ($tp_food as $value) {
                $name_ingredient = model_quantitative::find($value);
                $row_ingredient = new model_ingredient();
                $row_ingredient->food_id = $food_id;
                $row_ingredient->quantitative_id = $value;
                $row_ingredient->name = $name_ingredient->name;
                $row_ingredient->weight = $g_food[$i];
                $row_ingredient->save();
                $i++;
            }
        }
        echo 1;
    }

    public function deleteFood(Request $request){
        $id = $request->get('id');
        $food = model_foods::find($id);
        if($food){
            if($food->delete()){
                echo 1;
            }else{
                echo -1;
            }
        }else{
            echo -1;
        }
    }

    public function editFood(Request $request){
        $id = $request->get('id');
        $food = model_foods::find($id);
        $data['food'] = $food;
        $data['menu_food'] = $food->in_menu; 
        //xu li tabs
        $tabs_food = model_tabs_food::where('food_id', $id)->get();
        $data['tabs_food'] = $tabs_food;
        //xử lí time food
        $time_food = model_time_has_foods::where('food_id', $id)->get();
        $data['time_food'] = $time_food;
        //xử lí thành phần
        $ingredient = model_ingredient::where('food_id', $id)->get();
        $data['ingredient'] = $ingredient;
        echo json_encode($data);
    }

    public function fetch_modal_add_food(){
        
             $id = 49;
        DB::table('foods')->where('id', $id)->delete();
    }
}
