<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTYPEBAILTable extends Migration {

	public function up()
	{
		Schema::create('T_TYPE_BAIL', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_TYPE_BAIL', 20)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_TYPE_BAIL');
	}
}