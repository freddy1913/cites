<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTGARANTTable extends Migration {

	public function up()
	{
		Schema::create('T_GARANT', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_NOM', 20)->nullable();
			$table->string('C_PRENOM', 20)->nullable();
			$table->string('C_TELEPHONE', 20)->nullable();
			$table->string('C_GSM', 20)->nullable();
			$table->string('C_IBAN', 34)->nullable();
			$table->string('C_BIC', 11)->nullable();
			$table->string('C_COMMENTAIRE', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_GARANT');
	}
}