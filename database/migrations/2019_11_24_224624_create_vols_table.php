<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('num_vol',5);
            $table->date('date_depart');
            $table->date('date_arriver');
            $table->time('heure_depart');
            $table->time('heure_arriver');
            $table->time('duree_vol');
            $table->unsignedBigInteger('num_ville_depart');
            $table->string('ville_depart');
            $table->unsignedBigInteger('num_ville_arriver');
            $table->string('ville_arriver');
            $table->unsignedBigInteger('nombre_place_restante')->nullable();
            $table->double('prix_vol');
            $table->unsignedBigInteger('id_avion');
            $table->string('code_aeroport_depart',3);
            $table->string('nom_aeroport_depart');
            $table->string('code_aeroport_arriver',3);
            $table->string('nom_aeroport_arriver');
            $table->unsignedBigInteger('num_terminal_depart');
            $table->unsignedBigInteger('num_terminal_arriver');
            $table->time('heure_embarquement');
            $table->string('porte_embarquement');
            $table->double('prix_bagage_sup');


         
        });
        Schema::table('vols', function($table) 
        {
            $table->foreign('id_avion')->references('id')->on('avions');
            $table->foreign('code_aeroport_depart')->references('code_aeroport')->on('aeroports');
            $table->foreign('code_aeroport_arriver')->references('code_aeroport')->on('aeroports');
            $table->foreign('num_ville_depart')->references('id_ville')->on('villes');
            $table->foreign('num_ville_arriver')->references('id_ville')->on('villes');
            $table->foreign('num_terminal_depart')->references('id')->on('terminals');
            $table->foreign('num_terminal_arriver')->references('id')->on('terminals');
        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vols');
    }
}
