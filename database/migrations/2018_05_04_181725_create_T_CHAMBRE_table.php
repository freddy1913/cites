<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCHAMBRETable extends Migration {

	public function up()
	{
		Schema::create('T_CHAMBRE', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cites_id')->unsigned();
			$table->integer('type_chambre_id')->unsigned();
			$table->integer('statut_id')->unsigned();
			$table->string('C_NUMERO', 12)->nullable();
			$table->string('C_CATEGORIE', 50)->nullable();
			$table->string('C_SITUATION', 50)->nullable();
			$table->date('D_DEBUT')->nullable();
			$table->date('D_FIN')->nullable();
			$table->string('C_COMMENTAIRE', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_CHAMBRE');
	}
}