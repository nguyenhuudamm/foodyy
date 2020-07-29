<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MonAn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('food')) {
            Schema::create('food', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_shop');
                $table->unsignedBigInteger('id_category_shop');
                $table->string('ten_monan');
                $table->string('ten_khongdau')->nullable();
                $table->string('price');
                $table->string('price_reduce')->nullable();
                $table->string('image_thumb')->nullable();
                $table->string('image_detail')->nullable();
                $table->string('khuyen_mai')->nullable();
                $table->integer('trang_thai')->default(1);
                $table->timestamps();
                $table->foreign('id_shop')->references('id')->on('shop');
                $table->foreign('id_category_shop')->references('id')->on('category_shop');
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
        Schema::dropIfExists('food');
    }
}
