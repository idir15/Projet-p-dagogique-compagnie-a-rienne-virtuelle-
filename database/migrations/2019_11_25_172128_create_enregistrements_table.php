<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnregistrementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enregistrements', function (Blueprint $table) {

            $table->bigIncrements('num_enregistrement');
            $table->dateTime('date_enregistrement')->nullable();
            $table->unsignedBigInteger('num_client')->index();
            $table->unsignedBigInteger('id_vol')->nullable();

           // $table->unsignedBigInteger('id_siege')->nullable();
           
            $table->unsignedBigInteger('num_paiement')->nullable();
            $table->boolean('statut')->nullable();
            $table->timestamps();
        });
        Schema::table('enregistrements', function($table) {
          $table->foreign('id_vol')->references('id')->on('vols');
        
          $table->foreign('num_client')->references('num_client')->on('clients');
         // $table->foreign('id_siege')->references('id')->on('sieges');
          $table->foreign('num_paiement')->references('id')->on('paiements');
    });










    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enregistrements');
    }
}
