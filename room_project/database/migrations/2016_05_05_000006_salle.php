<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Salle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salle', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom_salle');
            $table->integer('numero_salle');
            $table->string('adresse_salle');
            $table->float('tarif_salle');
            $table->float('capacite_salle');
            $table->boolean('gardien_salle');
            $table->integer('caution_salle');
			$table->string('image');
            $table->integer('id_type_salle')->unsigned();
        });


        Schema::table('salle', function($table) {    
            $table->foreign('id_type_salle')->references('id')->on('type_salle'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('salle');
    }
}
