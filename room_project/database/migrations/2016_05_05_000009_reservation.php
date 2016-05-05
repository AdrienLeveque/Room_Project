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
            $table->integer('user_id')->unsigned();
            $table->integer('employe_id')->unsigned();
            $table->integer('salle_reserve_id')->unsigned();
        });


        Schema::table('reservation', function($table) {    
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('employe_id')->references('id')->on('employe');
            $table->foreign('salle_reserve_id')->references('id')->on('salle');
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
