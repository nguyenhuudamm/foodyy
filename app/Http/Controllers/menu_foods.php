<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model_menu_foods;
use App\model_shop;

class menu_foods extends Controller
{
    public function index(){
      $list = model_menu_foods::all();
      $listShop = model_shop::all();
      return view('admin.content.category_shop', ['list' => $list, 'listShop' => $listShop]);
    }

    public function foods(){
       return view('admin.content.foods');
    }
    public function addMenuFoods(Request $request){
      $dataAdd = new model_menu_foods();
      $dataAdd->shop_id = $request->MF_id_shop;
      $dataAdd->name = $request->name_menu_foods;
      $dataAdd->unsigned_name = $this->convert_vi_to_en($request->name_menu_foods);
      if($request->statusMenuFoods = "") {
        $dataAdd->status = 0;
      } else {        
        $dataAdd->status = 1;
      }
      if($dataAdd->save()){
        echo $dataAdd->id;
      }else {
        echo -1;
      }
    } 
    public function editMenuFoods(Request $request) {
      $id = $request->get('id');
      $list = model_menu_foods::find($id);
      echo json_encode($list);
    }

    public function deleteMenuFoods(Request $request){
      $id= $request->get('id');
      
      $menu = model_menu_foods::find($id);
      if($menu->delete()){
         echo 1;
      }else{
         echo -1;
      }
    }

    public function menuFoodsChangStatus(Request $request){
      $id = $request->get('id');
      $tab = model_menu_foods::find($id);
      $status = $tab->status;
      if($status == 1){
          //tat'
          $tab->status = 0;
          $tab->save();
          echo 0;
      }else{
          // mo
          $tab->status = 1;
          $tab->save();
          echo 1;
      }
     
  }

  public function updateMenuFoods(Request $request){
    $idTab = $request->get('idMenuFoods');
  
    $dataAdd =  model_menu_foods::find($idTab);
    $dataAdd->shop_id = $request->MF_id_shop;
    $dataAdd->name = $request->name_menu_foods;
    $dataAdd->unsigned_name = $this->convert_vi_to_en($request->name_menu_foods);
    if($dataAdd->save()){
        echo 1;
    }else{
        echo -1;
    }
}

   private function convert_vi_to_en($str) {
      $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
      $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
      $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
      $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
      $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
      $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
      $str = preg_replace("/(đ)/", "d", $str);
      $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
      $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
      $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
      $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
      $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
      $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
      $str = preg_replace("/(Đ)/", "D", $str);
      //$str = str_replace(" ", "-", str_replace("&*#39;","",$str));
      return $str;
    
  }
}
