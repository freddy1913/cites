<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAffectationTable extends Migration {

	public function up()
	{
		Schema::create('affectation', function(Blueprint $table) {
			$table->integer('transaction_id')->unsigned();
			$table->integer('facture_id')->unsigned();
			$table->decimal('montant')->nullable();
			$table->timestamp('timestamps')->nullable();
			$table->string('created_by', 10)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('affectation');
	}
}