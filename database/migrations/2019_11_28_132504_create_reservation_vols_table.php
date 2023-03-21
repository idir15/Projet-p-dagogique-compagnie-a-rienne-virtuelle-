<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_vols', function (Blueprint $table) {
            $table->bigIncrements('id');  
            $table->unsignedBigInteger('num_reservation');
            $table->unsignedBigInteger('id_vol')->index();

        });


        Schema::table('reservation_vols', function($table)
         {
        $table->foreign('num_reservation')->references('num_reservation')->on('reservations');
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
        Schema::dropIfExists('reservation_vols');
    }
}
