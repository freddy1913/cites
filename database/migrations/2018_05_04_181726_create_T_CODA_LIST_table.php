<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCODALISTTable extends Migration {

	public function up()
	{
		Schema::create('T_CODA_LIST', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('NUM_CODA', 15)->nullable();
			$table->date('D_DATE')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_CODA_LIST');
	}
}