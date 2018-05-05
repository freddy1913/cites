<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTADRESSETable extends Migration {

	public function up()
	{
		Schema::create('T_ADRESSE', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_RUE', 40)->nullable();
			$table->string('C_NUM', 40)->nullable();
			$table->string('C_CP', 8)->nullable();
			$table->string('C_LOCALITE', 32)->nullable();
			$table->string('C_PAYS', 32)->nullable();
			$table->string('C_TYPE', 32)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_ADRESSE');
	}
}