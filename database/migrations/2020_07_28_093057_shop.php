<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Shop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('shop')) {
            Schema::create('shop', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_user');
                $table->string('ten_shop');
                $table->string('ten_khongdau');
                $table->string('tinh_thanh');
                $table->string('quan_huyen');
                $table->string('phuong_xa')->nullable();
                $table->string('dia_chi');
                $table->string('email')->nullable();
                $table->string('phone')->nullable();
                $table->string('image_thumb')->nullable();
                $table->string('time_open')->nullable();
                $table->string('area_price')->nullable();
                $table->integer('trang_thai')->default(1);
                $table->timestamps();
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
        Schema::dropIfExists('shop');
    }
}
