<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuantitative extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('quantitative')) {
            Schema::create('quantitative', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('energy')->nullable();
                $table->string('water')->nullable();
                $table->string('protein')->nullable(); // chất đạm
                $table->string('fat')->nullable(); //chất béo
                $table->string('flour')->nullable(); //chất bột
                $table->string('fiber')->nullable(); //chất xơ
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
        Schema::dropIfExists('quantitative');
    }
}
