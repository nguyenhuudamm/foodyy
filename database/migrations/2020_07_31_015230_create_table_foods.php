<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFoods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('foods')) {
            Schema::create('foods', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('menu_food_id');
                $table->unsignedBigInteger('sale_id')->default(0);
                $table->string('name');
                $table->string('unsigned_name')->nullable(); 
                $table->string('description')->nullable(); // miêu tả
                $table->string('price')->nullable(); 
                $table->string('image')->nullable();
                $table->string('image_details')->nullable();
                $table->integer('status')->default(1);
                $table->timestamps();
                $table->foreign('menu_food_id')->references('id')->on('menu_foods');
                $table->foreign('sale_id')->references('id')->on('sales');
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
        Schema::dropIfExists('foods');
    }
}
