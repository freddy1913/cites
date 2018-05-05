<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTFACTURETable extends Migration {

	public function up()
	{
		Schema::create('T_FACTURE', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('location_id')->unsigned();
			$table->integer('fact_nature_id')->unsigned();
			$table->integer('lot_facture_id')->unsigned()->nullable();
			$table->date('D_DATE')->nullable();
			$table->decimal('N_MONTANT')->nullable();
			$table->tinyInteger('C_TYPE')->nullable();
			$table->string('C_COMMENTAIRE', 255)->nullable();
			$table->tinyInteger('C_ETAT')->nullable();
			$table->decimal('N_SOLDE')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_FACTURE');
	}
}