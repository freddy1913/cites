<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnneeAcademiqueTable extends Migration {

	public function up()
	{
		Schema::create('annee_academique', function(Blueprint $table) {
			$table->increments('id');
			$table->string('annee', 15)->nullable();
			$table->date('debut_bail')->nullable();
			$table->date('fin_bail')->nullable();
			$table->date('bail_fpms')->nullable();
			$table->date('fin_bail_fpms')->nullable();
			$table->date('kot_umons_debut')->nullable();
			$table->date('kot_umons_fin')->nullable();
			$table->boolean('annee_defaut')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('annee_academique');
	}
}