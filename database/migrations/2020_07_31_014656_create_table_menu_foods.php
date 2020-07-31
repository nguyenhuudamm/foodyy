<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMenuFoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('menu_foods')) {
            Schema::create('menu_foods', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('shop_id');
                $table->string('name');
                $table->string('unsigned_name')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
                $table->foreign('shop_id')->references('id')->on('shop');
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
        Schema::dropIfExists('menu_foods');
    }
}
