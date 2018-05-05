<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTNIVUTILISATEURTable extends Migration {

	public function up()
	{
		Schema::create('T_NIV_UTILISATEUR', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_NAME', 15);
		});
	}

	public function down()
	{
		Schema::drop('T_NIV_UTILISATEUR');
	}
}