<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_foods extends Model
{
    protected $table = "foods";
    public $timetamps = false;

    public function in_menu(){
    	// quan hệ 1 - 1 bảng [loaitin] khóa ngoại  -> bảng chính [theloai] 
        return $this->beLongsTo('App\model_menu_foods', 'menu_food_id', 'id');
    }

    //  tabs
    public function tab_foods(){
    	return $this->hasMany('App\model_tabs_food', 'food_id', 'id');
    }

    // ingredient
    public function ingredient_foods(){
    	return $this->hasMany('App\model_ingredient', 'food_id', 'id');
    }

    // time has food
    public function time_has_foods(){
    	return $this->hasMany('App\model_time_has_foods', 'food_id', 'id');
    }
}
