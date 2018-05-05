<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTCATEGORIEETUDIANTTable extends Migration {

	public function up()
	{
		Schema::create('T_CATEGORIE_ETUDIANT', function(Blueprint $table) {
			$table->increments('id');
			$table->string('C_NOM', 35)->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_CATEGORIE_ETUDIANT');
	}
}