<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTable4 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('shop', function (Blueprint $table) {
            $table->string('ten_khongdau')->nullable()->change();    
            $table->string('phuong_xa')->nullable()->change();
            $table->string('email')->nullable()->change();
            $table->string('phone')->nullable()->change();
            $table->string('image_thumb')->nullable()->change();
            $table->string('time_open')->nullable()->change();
            $table->string('area_price')->nullable()->change();
            $table->integer('trang_thai')->default(1)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
