<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnregistrementSiegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enregistrement_sieges', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_enregistrement')->index();
            $table->unsignedBigInteger('num_siege')->index();
            $table->timestamps();
        });
        Schema::table('enregistrement_sieges', function($table)
        {
       $table->foreign('num_enregistrement')->references('num_enregistrement')->on('enregistrements');
       $table->foreign('num_siege')->references('id')->on('sieges');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enregistrement_sieges');
    }
}
