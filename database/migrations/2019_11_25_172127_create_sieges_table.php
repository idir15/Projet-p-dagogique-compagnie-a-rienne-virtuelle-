<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sieges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('num_siege');
            // $table->boolean('etat_siege');
            $table->bigInteger('num_classe')->unsigned();
            $table->unsignedBigInteger('id_avion');
            // $table->unsignedBigInteger('num_enregistrement'); 
        });



        Schema::table('sieges', function($table) {
            $table->foreign('num_classe')->references('num_classe')->on('classes');
            $table->foreign('id_avion')->references('id')->on('avions');
            // $table->foreign('num_enregistrement')->references('num_enregistrement')->on('enregistrements');


    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sieges');
    }
}
