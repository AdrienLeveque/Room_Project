<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Mairie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mairie', function (Blueprint $table) {
            $table->increments('id');
			$table->string('libele');
			$table->string('adresse');
			$table->string('code_postal');
			$table->string('ville');
            $table->string('telephone');
            $table->string('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('mairie');
    }
}
