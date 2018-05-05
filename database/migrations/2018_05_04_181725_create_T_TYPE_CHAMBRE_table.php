<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTYPECHAMBRETable extends Migration {

	public function up()
	{
		Schema::create('T_TYPE_CHAMBRE', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_LIBELLE', 5);
			$table->string('C_DESCRIPTION', 80);
			$table->string('C_DESCRIPTION_EN', 80);
			$table->integer('N_PLACE');
		});
	}

	public function down()
	{
		Schema::drop('T_TYPE_CHAMBRE');
	}
}