<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('num_reservation')->index();

            $table->unsignedBigInteger('num_client')->index();
            $table->boolean('type_client')->nullable();


        });
        Schema::table('reservation_clients', function($table) 
        {
            $table->foreign('num_reservation')->references('num_reservation')->on('reservations');
            $table->foreign('num_client')->references('num_client')->on('clients');



        });






    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation_clients');
    }
}
