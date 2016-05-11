<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Horaire extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horaire', function (Blueprint $table) {
            $table->increments('id');
			$table->string('jour');
            $table->string('date_debut_matin');
            $table->string('date_fin_matin');
			$table->string('date_debut_soir');
			$table->string('date_fin_soir');
			$table->integer('id_mairie')->unsigned();
        });
		
		Schema::table('horaire', function($table) {    
            $table->foreign('id_mairie')->references('id')->on('mairie'); 
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('horaire');
    }
}
