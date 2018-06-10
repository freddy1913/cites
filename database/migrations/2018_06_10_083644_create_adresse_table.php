<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAdresseTable extends Migration {

	public function up()
	{
		Schema::create('adresse', function(Blueprint $table) {
			$table->increments('id');
			$table->string('rue', 40)->nullable();
			$table->string('num', 40)->nullable();
			$table->string('cp', 8)->nullable();
			$table->string('localite', 32)->nullable();
			$table->string('pays', 32)->nullable();
			$table->string('type', 32)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('adresse');
	}
}