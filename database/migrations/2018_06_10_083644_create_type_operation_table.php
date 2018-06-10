<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeOperationTable extends Migration {

	public function up()
	{
		Schema::create('type_operation', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 50)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('type_operation');
	}
}