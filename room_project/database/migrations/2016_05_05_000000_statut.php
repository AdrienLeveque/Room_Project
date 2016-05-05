<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Statut extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('statut', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');
            $table->integer('priorite');
            $table->boolean('avec_recette');
            $table->float('reduction');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('statut');
    }
}
