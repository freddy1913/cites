<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFactureTable extends Migration {

	public function up()
	{
		Schema::create('facture', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('location_id')->unsigned();
			$table->integer('fact_nature_id')->unsigned();
			$table->integer('lot_facture_id')->unsigned()->nullable();
			$table->date('date')->nullable();
			$table->decimal('montant')->nullable();
			$table->tinyInteger('type')->nullable();
			$table->string('commentaire', 255)->nullable();
			$table->tinyInteger('etat')->nullable();
			$table->decimal('solde')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('facture');
	}
}