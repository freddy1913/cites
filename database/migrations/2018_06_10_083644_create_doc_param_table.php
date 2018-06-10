<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocParamTable extends Migration {

	public function up()
	{
		Schema::create('doc_param', function(Blueprint $table) {
			$table->increments('id');
			$table->string('document_name', 20)->nullable();
			$table->string('param', 20)->nullable();
			$table->string('description', 70)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('doc_param');
	}
}