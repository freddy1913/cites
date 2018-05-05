<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFACTNATURETable extends Migration {

	public function up()
	{
		Schema::create('T_FACT_NATURE', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_LIBELLE', 40)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_FACT_NATURE');
	}
}