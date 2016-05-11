<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalleMateriel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salle_materiel', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_materiel')->unsigned();
            $table->integer('id_salle')->unsigned();
        });

		Schema::table('salle_materiel', function($table) {    
            $table->foreign('id_materiel')->references('id')->on('materiel'); 
            $table->foreign('id_salle')->references('id')->on('salle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('salle_materiel');
    }
}
