<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTarifTable extends Migration {

	public function up()
	{
		Schema::create('tarif', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cites_id')->unsigned();
			$table->integer('annee_academique_id')->unsigned();
			$table->integer('type_chambre_id')->unsigned();
			$table->integer('typebail_id')->unsigned();
			$table->tinyInteger('statut_loc')->nullable();
			$table->decimal('journalier')->nullable();
			$table->decimal('hebdo')->nullable();
			$table->decimal('mensuel')->nullable();
			$table->decimal('nuit_supp')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('tarif');
	}
}