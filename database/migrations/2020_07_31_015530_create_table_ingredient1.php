<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableIngredient1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         if(!Schema::hasTable('ingredient')) {
            Schema::create('ingredient', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('food_id');
                $table->unsignedBigInteger('quantitative_id');
                $table->string('name');
                $table->string('unsigned_name')->nullable(); 
                $table->string('weight')->nullable(); // miêu tả
                $table->string('dvt')->nullable(); 
                $table->timestamps();
                $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade')->onUpdate('cascade');;
                $table->foreign('quantitative_id')->references('id')->on('quantitative')->onDelete('cascade')->onUpdate('cascade');;
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
        Schema::dropIfExists('ingredient');
    }
}
