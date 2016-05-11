<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ClientStatut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('client_statut', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle_statut');
            $table->integer('priorite_statut');
            $table->boolean('sans_recette_statut');
            $table->float('reduction_statut');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('client_statut');
    }
}
