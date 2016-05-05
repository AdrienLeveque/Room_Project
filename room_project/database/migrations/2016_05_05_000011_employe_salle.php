<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EmployeSalle extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('employe_salle', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('employe_id')->unsigned();
            $table->integer('salle_id')->unsigned();
        });


        Schema::table('employe_salle', function($table) {    
            $table->foreign('employe_id')->references('id')->on('employe'); 
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
        Schema::drop('employe_salle');
    }
}
