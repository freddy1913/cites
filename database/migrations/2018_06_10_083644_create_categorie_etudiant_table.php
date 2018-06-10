<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategorieEtudiantTable extends Migration {

	public function up()
	{
		Schema::create('categorie_etudiant', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 35)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('categorie_etudiant');
	}
}