<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Employe extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employe', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_user')->unsigned();
            $table->integer('id_type_employe')->unsigned();
        });

		Schema::table('employe', function($table) {    
            $table->foreign('id_user')->references('id')->on('users'); 
            $table->foreign('id_type_employe')->references('id')->on('type_employe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('employe');
    }
}
