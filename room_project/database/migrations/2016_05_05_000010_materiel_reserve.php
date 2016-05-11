<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaterielReserve extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materiel_reserve', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('abime');
            $table->integer('id_reservation')->unsigned();
            $table->integer('id_materiel')->unsigned();
        });


        Schema::table('materiel_reserve', function($table) {    
            $table->foreign('id_reservation')->references('id')->on('reservation');
            $table->foreign('id_materiel')->references('id')->on('materiel'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('materiel_reserve');
    }
}
