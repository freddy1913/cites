<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTSTATUTCITETable extends Migration {

	public function up()
	{
		Schema::create('T_STATUT_CITE', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_NOM', 15)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_STATUT_CITE');
	}
}