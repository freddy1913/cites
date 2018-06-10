<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNivUtilisateurTable extends Migration {

	public function up()
	{
		Schema::create('niv_utilisateur', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 15);
		});
	}

	public function down()
	{
		Schema::drop('niv_utilisateur');
	}
}