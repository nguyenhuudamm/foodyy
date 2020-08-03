<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class model_tabs extends Model
{
     protected $table = "tabs";
    public $timetamps = false;

    public function tab_child(){
    	return $this->hasMany('App\model_tab_childs', 'tab_id', 'id');
    }
}
