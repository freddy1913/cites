<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransactionTable extends Migration {

	public function up()
	{
		Schema::create('transaction', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('signaletique_id')->unsigned()->nullable();
			$table->integer('type_operation_id')->unsigned();
			$table->integer('num_extrait')->nullable();
			$table->date('date')->nullable();
			$table->decimal('montant')->nullable();
			$table->string('iban', 100)->nullable();
			$table->string('bic', 11)->nullable();
			$table->string('compte_benef', 100)->nullable();
			$table->string('nom_compte_benef', 32)->nullable();
			$table->string('communication', 255)->nullable();
			$table->string('communication_struct', 32)->nullable();
			$table->tinyInteger('statut')->nullable();
			$table->string('nom_compte', 255)->nullable();
			$table->decimal('solde')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('transaction');
	}
}