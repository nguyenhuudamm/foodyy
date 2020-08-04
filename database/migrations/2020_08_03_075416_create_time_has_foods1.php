<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeHasFoods1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('time_has_foods')) {
            Schema::create('time_has_foods', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('food_id');
                $table->string('start_time')->nullable(); 
                $table->string('end_time')->nullable();
                $table->timestamps();
                $table->foreign('food_id')->references('id')->on('foods')->onDelete('cascade')->onUpdate('cascade');;
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
        Schema::dropIfExists('time_has_foods');
    }
}
