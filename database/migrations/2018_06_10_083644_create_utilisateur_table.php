<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtilisateurTable extends Migration {

	public function up()
	{
		Schema::create('utilisateur', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('niv_utilisateur_id')->unsigned();
			$table->string('matricule', 8);
			$table->string('nom', 30);
			$table->string('prenom', 30);
			$table->string('password', 15);
		});
	}

	public function down()
	{
		Schema::drop('utilisateur');
	}
}