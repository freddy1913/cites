<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTLOCATIONTable extends Migration {

	public function up()
	{
		Schema::create('T_LOCATION', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('signaletique_id')->unsigned();
			$table->integer('chambre_id')->unsigned();
			$table->integer('type_bail_id')->unsigned();
			$table->integer('annee_academique_id')->unsigned();
			$table->date('D_DEBUT')->nullable();
			$table->date('D_FIN')->nullable();
			$table->date('D_FIN_OCCUPATION')->nullable();
			$table->text('C_COMMENTAIRE')->nullable();
			$table->decimal('N_MONTLOYER')->nullable();
			$table->decimal('N_MONTHEBDO')->nullable();
			$table->decimal('N_MONTJOURNA')->nullable();
			$table->date('D_ENVOI_CONTRAT')->nullable();
			$table->timestamp('timestamps')->nullable();
			$table->string('created_by', 10)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_LOCATION');
	}
}