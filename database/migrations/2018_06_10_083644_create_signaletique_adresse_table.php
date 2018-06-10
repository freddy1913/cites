<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSignaletiqueAdresseTable extends Migration {

	public function up()
	{
		Schema::create('signaletique_adresse', function(Blueprint $table) {
			$table->integer('signaletique_id')->unsigned();
			$table->integer('adresse_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('signaletique_adresse');
	}
}