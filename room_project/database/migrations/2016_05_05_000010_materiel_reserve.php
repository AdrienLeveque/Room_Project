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
            $table->integer('reservation_id')->unsigned();
            $table->integer('materiel_id')->unsigned();
        });


        Schema::table('materiel_reserve', function($table) {    
            $table->foreign('reservation_id')->references('id')->on('reservation');
            $table->foreign('materiel_id')->references('id')->on('materiel'); 
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
