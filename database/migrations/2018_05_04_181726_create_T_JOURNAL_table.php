<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTJOURNALTable extends Migration {

	public function up()
	{
		Schema::create('T_JOURNAL', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_NOM', 20)->nullable();
			$table->string('C_IBAN', 34)->nullable();
			$table->string('C_BIC', 11)->nullable();
			$table->decimal('N_SOLDE')->nullable();
			$table->string('C_STATUT', 10);
			$table->string('C_COMMENTAIRE', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_JOURNAL');
	}
}