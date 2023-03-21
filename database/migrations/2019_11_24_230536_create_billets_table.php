<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBilletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('billets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('num_billet');
            $table->unsignedBigInteger('num_reservation')->index();
            $table->unsignedBigInteger('num_client')->index();
            
        });



        Schema::table('billets', function($table) {
         
            $table->foreign('num_client')->references('num_client')->on('clients');
         
            $table->foreign('num_reservation')->references('num_reservation')->on('reservations');
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('billets');
    }

}