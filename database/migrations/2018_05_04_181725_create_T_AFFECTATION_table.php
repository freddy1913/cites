<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTAFFECTATIONTable extends Migration {

	public function up()
	{
		Schema::create('T_AFFECTATION', function(Blueprint $table) {
			$table->integer('transaction_id')->unsigned();
			$table->integer('facture_id')->unsigned();
			$table->decimal('N_MONTANT')->nullable();
			$table->timestamp('timestamps')->nullable();
			$table->string('created_by', 10)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_AFFECTATION');
	}
}