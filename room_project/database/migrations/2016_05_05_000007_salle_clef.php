<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SalleClef extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('salle_clef', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_clef')->unsigned();
            $table->integer('id_salle')->unsigned();
        });


        Schema::table('salle_clef', function($table) {    
            $table->foreign('id_clef')->references('id')->on('clef'); 
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
        Schema::drop('salle_clef');
    }
}
