<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerminalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terminals', function (Blueprint $table) 
        {
            $table->bigIncrements('id');
            $table->string('nom_terminal');
            $table->string('code_aeroport',3);
        });
       
        Schema::table('terminals', function($table) 
        {
            $table->foreign('code_aeroport')->references('code_aeroport')->on('aeroports');



         });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('terminals');
    }
}
