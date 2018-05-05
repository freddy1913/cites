<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTARIFTable extends Migration {

	public function up()
	{
		Schema::create('T_TARIF', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cites_id')->unsigned();
			$table->integer('annee_academique_id')->unsigned();
			$table->integer('type_chambre_id')->unsigned();
			$table->integer('typebail_id')->unsigned();
			$table->tinyInteger('N_STATUT_LOC')->nullable();
			$table->decimal('N_JOURNALIER')->nullable();
			$table->decimal('N_HEBDOMADAIRE')->nullable();
			$table->decimal('N_MENSUEL')->nullable();
			$table->decimal('N_NUIT_SUPP')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_TARIF');
	}
}