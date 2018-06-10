<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationTable extends Migration {

	public function up()
	{
		Schema::create('location', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('signaletique_id')->unsigned();
			$table->integer('chambre_id')->unsigned();
			$table->integer('type_bail_id')->unsigned();
			$table->integer('annee_academique_id')->unsigned();
			$table->date('debut')->nullable();
			$table->date('fin')->nullable();
			$table->date('fin_occupation')->nullable();
			$table->text('commentaire')->nullable();
			$table->decimal('montant_loyer')->nullable();
			$table->decimal('montant_hebdo')->nullable();
			$table->decimal('montant_journa')->nullable();
			$table->date('envoi_contrat')->nullable();
			$table->timestamp('timestamps')->nullable();
			$table->string('created_by', 10)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('location');
	}
}