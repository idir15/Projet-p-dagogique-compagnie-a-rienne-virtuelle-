<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnelVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnel_vols', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_personnel')->index();
            $table->unsignedBigInteger('id_vol');
            
        });

        Schema::table('personnel_vols', function($table)
        {
       $table->foreign('id_personnel')->references('id')->on('personnels');
       $table->foreign('id_vol')->references('id')->on('vols');




    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnel_vols');
    }
}
