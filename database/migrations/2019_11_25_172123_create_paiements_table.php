<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('date_paiement');
            $table->double('montant_paiement');
            $table->string('mode_paiement');
            $table->unsignedBigInteger('num_carte_credit')->index();

            // c koi lemontant de paeimentttttttttttt-------

        });
        Schema::table('paiements', function($table) {
            $table->foreign('num_carte_credit')->references('id')->on('carte_credits');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
