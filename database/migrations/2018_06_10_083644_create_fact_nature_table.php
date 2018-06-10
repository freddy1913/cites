<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactNatureTable extends Migration {

	public function up()
	{
		Schema::create('fact_nature', function(Blueprint $table) {
			$table->increments('id');
			$table->string('c_libelle', 40)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('fact_nature');
	}
}