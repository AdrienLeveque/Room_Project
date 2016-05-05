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
            $table->integer('clef_id')->unsigned();
            $table->integer('salle_id')->unsigned();
        });


        Schema::table('salle_clef', function($table) {    
            $table->foreign('clef_id')->references('id')->on('clef'); 
            $table->foreign('salle_id')->references('id')->on('salle');
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
