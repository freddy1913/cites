<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChambreTable extends Migration {

	public function up()
	{
		Schema::create('chambre', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cites_id')->unsigned();
			$table->integer('type_chambre_id')->unsigned();
			$table->integer('statut_id')->unsigned();
			$table->string('numero', 12)->nullable();
			$table->string('categorie', 50)->nullable();
			$table->string('situation', 50)->nullable();
			$table->date('debut')->nullable();
			$table->date('fin')->nullable();
			$table->string('commentaire', 255)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('chambre');
	}
}