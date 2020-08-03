<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_shop extends Model
{
    protected $table = "shop";
    public $timetamps = false;

    // thời gian hoạt động của shop
    public function active_shops(){
    	return $this->hasMany('App\model_active_shops', 'shop_id', 'id');
    }
    // bảng menu món ăn
    public function menu_foods(){
    	return $this->hasMany('App\model_menu_foods', 'shop_id', 'id');
    }
}
