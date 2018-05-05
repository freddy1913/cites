<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTUTILISATEURTable extends Migration {

	public function up()
	{
		Schema::create('T_UTILISATEUR', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('niv_utilisateur_id')->unsigned();
			$table->string('C_MATRICULE', 8);
			$table->string('C_NOM', 30);
			$table->string('C_PRENOM', 30);
			$table->string('C_PASSWORD', 15);
		});
	}

	public function down()
	{
		Schema::drop('T_UTILISATEUR');
	}
}