<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeChambreTable extends Migration {

	public function up()
	{
		Schema::create('type_chambre', function(Blueprint $table) {
			$table->increments('id');
			$table->string('libelle', 5);
			$table->string('description', 80);
			$table->string('description_en', 80);
			$table->integer('place');
		});
	}

	public function down()
	{
		Schema::drop('type_chambre');
	}
}