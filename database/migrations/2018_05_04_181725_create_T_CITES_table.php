<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCITESTable extends Migration {

	public function up()
	{
		Schema::create('T_CITES', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('adresse_id')->unsigned();
			$table->integer('statut_id')->unsigned();
			$table->string('C_CODIFICATION', 4)->nullable();
			$table->string('C_LIBELLE', 50)->nullable();
			$table->integer('N_NOMBRE_CHAMBRE')->nullable();
			$table->integer('N_NOMBRE_PLACE')->nullable();
			$table->string('C_COMMENTAIRE', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_CITES');
	}
}