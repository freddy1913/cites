<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTYPEOPERATIONTable extends Migration {

	public function up()
	{
		Schema::create('T_TYPE_OPERATION', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_NOM', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_TYPE_OPERATION');
	}
}