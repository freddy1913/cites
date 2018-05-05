<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTSIGNALETIQUEADRESSETable extends Migration {

	public function up()
	{
		Schema::create('T_SIGNALETIQUE_ADRESSE', function(Blueprint $table) {
			$table->integer('signaletique_id')->unsigned();
			$table->integer('adresse_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('T_SIGNALETIQUE_ADRESSE');
	}
}