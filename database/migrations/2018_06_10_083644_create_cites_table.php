<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCitesTable extends Migration {

	public function up()
	{
		Schema::create('cites', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('adresse_id')->unsigned();
			$table->integer('statut_id')->unsigned();
			$table->string('codification', 4)->nullable();
			$table->string('libelle', 50)->nullable();
			$table->integer('nombre_chambre')->nullable();
			$table->integer('nombre_place')->nullable();
			$table->string('commentaire', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('cites');
	}
}