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
            $table->string('nom');
            $table->integer('numero');
            $table->string('adresse');
            $table->float('tarif');
            $table->float('caution');
            $table->boolean('possede_gardien');
            $table->integer('capacite');
            $table->integer('type_salle_id')->unsigned();
            $table->integer('employe_salle_id')->unsigned();
        });


        Schema::table('salle', function($table) {    
            $table->foreign('type_salle_id')->references('id')->on('type_salle'); 
            $table->foreign('employe_salle_id')->references('id')->on('employe');
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
