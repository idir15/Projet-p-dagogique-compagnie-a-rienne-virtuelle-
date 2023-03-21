<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseAvionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_avions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_classe');
            $table->unsignedBigInteger('id_avion')->index();
        });
    
        Schema::table('classe_avions', function($table)
        {
       $table->foreign('num_classe')->references('num_classe')->on('classes');
       $table->foreign('id_avion')->references('id')->on('avions');

    });




    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_avions');
    }
}
