<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGarantTable extends Migration {

	public function up()
	{
		Schema::create('garant', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 20)->nullable();
			$table->string('prenom', 20)->nullable();
			$table->string('telephone', 20)->nullable();
			$table->string('gsm', 20)->nullable();
			$table->string('iban', 34)->nullable();
			$table->string('bic', 11)->nullable();
			$table->string('commentaire', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('garant');
	}
}