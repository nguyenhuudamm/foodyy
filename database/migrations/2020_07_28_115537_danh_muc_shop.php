<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DanhMucShop extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('category_shop')) {
            Schema::create('category_shop', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_shop');
                $table->string('ten_danhmuc');
                $table->string('ten_khongdau')->nullable();
                $table->integer('trang_thai')->default(1);
                $table->timestamps();
                $table->foreign('id_shop')->references('id')->on('shop');
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
        Schema::dropIfExists('category_shop');
    }
}
