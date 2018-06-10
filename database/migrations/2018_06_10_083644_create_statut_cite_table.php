<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStatutCiteTable extends Migration {

	public function up()
	{
		Schema::create('statut_cite', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 15)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('statut_cite');
	}
}