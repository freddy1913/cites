<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTANNEEACADEMIQUETable extends Migration {

	public function up()
	{
		Schema::create('T_ANNEE_ACADEMIQUE', function(Blueprint $table) {
			$table->increments('id');
			$table->string('N_ANNEE', 15)->nullable();
			$table->date('D_DEBUT_BAIL')->nullable();
			$table->date('D_FIN_BAIL')->nullable();
			$table->date('D_DEBUT_BAIL_FPMS')->nullable();
			$table->date('D_FIN_BAIL_FPMS')->nullable();
			$table->date('D_DKOT_UMONS')->nullable();
			$table->date('D_FKOT_UMONS')->nullable();
			$table->boolean('B_ANNEE_DEFAUT')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_ANNEE_ACADEMIQUE');
	}
}