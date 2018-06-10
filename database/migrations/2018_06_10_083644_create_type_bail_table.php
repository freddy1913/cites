<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTypeBailTable extends Migration {

	public function up()
	{
		Schema::create('type_bail', function(Blueprint $table) {
			$table->increments('id');
			$table->string('type_bail', 20)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('type_bail');
	}
}