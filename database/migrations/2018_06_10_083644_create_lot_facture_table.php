<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLotFactureTable extends Migration {

	public function up()
	{
		Schema::create('lot_facture', function(Blueprint $table) {
			$table->increments('id');
			$table->string('matricule', 6)->nullable();
			$table->date('date_gen')->nullable();
			$table->date('date_loyer')->nullable();
			$table->tinyInteger('statut')->nullable();
			$table->string('commentaire', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('lot_facture');
	}
}