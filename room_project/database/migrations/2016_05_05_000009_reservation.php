<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->boolean('etat_des_lieux_effectue');
            $table->integer('id_user')->unsigned();
            $table->integer('id_salle_reservation')->unsigned();
            $table->boolean('valide');
        });


        Schema::table('reservation', function($table) {    
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_salle_reservation')->references('id')->on('salle');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservation');
    }
}
