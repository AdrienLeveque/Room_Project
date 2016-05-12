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
            $table->integer('id_employe')->unsigned();
            $table->integer('id_salle')->unsigned();
        });


        Schema::table('employe_salle', function($table) {    
            $table->foreign('id_employe')->references('id')->on('employe'); 
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
        Schema::drop('employe_salle');
    }
}
