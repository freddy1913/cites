<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCodaListTable extends Migration {

	public function up()
	{
		Schema::create('coda_list', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('num_coda', 15)->nullable();
			$table->date('date')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('coda_list');
	}
}