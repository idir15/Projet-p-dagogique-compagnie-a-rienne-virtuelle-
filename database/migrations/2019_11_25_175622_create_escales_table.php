<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escales', function (Blueprint $table) {
            $table->bigIncrements('num_escale');
            $table->date('date_escale');
            $table->time('heure_depart_escale');
            $table->time('heure_arriver_escale');

            // $table->time('duree_escale');
            $table->unsignedBigInteger('id_vol');
            $table->string('code_aeroport_depart',3)->index();
            $table->string('code_aeroport_depart_escale',3)->index();
            $table->string('code_aeroport_arriver_escale',3)->index();
            $table->string('code_aeroport_arriver',3)->index();
            
        });



        Schema::table('escales', function($table) {
            $table->foreign('id_vol')->references('id')->on('vols');
            $table->foreign('code_aeroport_depart')->references('code_aeroport')->on('aeroports');
            $table->foreign('code_aeroport_depart_escale')->references('code_aeroport')->on('aeroports');
            $table->foreign('code_aeroport_arriver')->references('code_aeroport')->on('aeroports');
            $table->foreign('code_aeroport_arriver_escale')->references('code_aeroport')->on('aeroports');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('escales');
    }
}
