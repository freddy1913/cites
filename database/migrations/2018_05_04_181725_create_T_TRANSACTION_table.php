<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTTRANSACTIONTable extends Migration {

	public function up()
	{
		Schema::create('T_TRANSACTION', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('signaletique_id')->unsigned()->nullable();
			$table->integer('type_operation_id')->unsigned();
			$table->integer('N_NUM_EXTRAIT')->nullable();
			$table->date('D_DATE')->nullable();
			$table->decimal('N_MONTANT')->nullable();
			$table->string('C_IBAN', 100)->nullable();
			$table->string('C_BIC', 11)->nullable();
			$table->string('C_COMPTE_BENEF', 100)->nullable();
			$table->string('C_NOM_COMPTE_BENEF', 32)->nullable();
			$table->string('C_COMMUNICATION', 255)->nullable();
			$table->string('C_COMMUNICATION_STRUCT', 32)->nullable();
			$table->tinyInteger('N_STATUT')->nullable();
			$table->string('C_NOM_COMPTE', 255)->nullable();
			$table->decimal('N_SOLDE')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_TRANSACTION');
	}
}