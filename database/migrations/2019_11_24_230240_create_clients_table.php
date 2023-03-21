<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('num_client');
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('email_client');
            $table->string('num_passeport_client')->nullable();
            $table->string('num_telephone_client');
            $table->string('civilite_client');    
            $table->date('date_naissance_client');
            $table->integer('code_postal_client');
            $table->string('nationalite_client')->nullable();
            $table->date('date_expiration_passeport')->nullable();
            $table->string('pays_client');
            $table->bigInteger('num_categorie')->unsigned();
            $table->boolean('statut')->nullable();
            $table->string('login')->nullable();
            $table->string('mot_de_passe')->nullable();
           
            $table->timestamps();
        });
        
        Schema::table('clients', function($table) {
            $table->foreign('num_categorie')->references('num_categorie')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
