<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Banque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banque', function (Blueprint $table) {
            $table->increments('id');
			$table->string('libele');
			$table->string('type_carte');
			$table->string('numero_carte');
			$table->string('code_verification');
            $table->string('annee');
            $table->string('mois');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('banque');
    }
}
