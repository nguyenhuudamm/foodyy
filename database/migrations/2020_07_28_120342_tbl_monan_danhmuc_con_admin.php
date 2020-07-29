<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TblMonanDanhmucConAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('tbl_food_categoryChildSys')) {
            Schema::create('tbl_food_categoryChildSys', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_monan');
                $table->unsignedBigInteger('id_category_child_sys');
                $table->timestamps();
                $table->foreign('id_monan')->references('id')->on('food');
                $table->foreign('id_category_child_sysz')->references('id')->on('category_child_system');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_food_categoryChildSys');
    }
}
