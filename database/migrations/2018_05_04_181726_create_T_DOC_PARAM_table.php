<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTDOCPARAMTable extends Migration {

	public function up()
	{
		Schema::create('T_DOC_PARAM', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_DOCUMENT_NAME', 20)->nullable();
			$table->string('C_PARAM', 20)->nullable();
			$table->string('C_DESCRIPTION', 70)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_DOC_PARAM');
	}
}