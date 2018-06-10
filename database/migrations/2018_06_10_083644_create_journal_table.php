<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJournalTable extends Migration {

	public function up()
	{
		Schema::create('journal', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nom', 20)->nullable();
			$table->string('iban', 34)->nullable();
			$table->string('bic', 11)->nullable();
			$table->decimal('solde')->nullable();
			$table->string('statut', 10);
			$table->string('commentaire', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('journal');
	}
}