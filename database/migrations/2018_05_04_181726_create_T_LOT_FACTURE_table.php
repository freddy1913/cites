<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTLOTFACTURETable extends Migration {

	public function up()
	{
		Schema::create('T_LOT_FACTURE', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_MATRICULE', 6)->nullable();
			$table->date('D_DATE_GEN')->nullable();
			$table->date('D_DATE_LOYER')->nullable();
			$table->tinyInteger('N_STATUT')->nullable();
			$table->string('C_COMMENTAIRE', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_LOT_FACTURE');
	}
}