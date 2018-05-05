<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTSIGNALETIQUETable extends Migration {

	public function up()
	{
		Schema::create('T_SIGNALETIQUE', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('categorie_etudiant_id')->unsigned();
			$table->integer('garant_id')->unsigned()->nullable();
			$table->string('C_MATRICULE', 6)->nullable();
			$table->string('C_NOM', 30)->nullable();
			$table->string('C_PRENOM', 20)->nullable();
			$table->string('C_INITIAL', 4)->nullable();
			$table->string('C_NATIONALITE', 17)->nullable();
			$table->date('D_DATE_DE_NAISSANCE')->nullable();
			$table->string('C_TELEPHONE', 20)->nullable();
			$table->string('C_TELEPHONE_KOT', 20)->nullable();
			$table->string('C_GSM', 20)->nullable();
			$table->string('C_MAIL_UMONS', 50)->nullable();
			$table->string('C_MAIL_PERSONNEL', 50)->nullable();
			$table->string('C_FACULTE', 150)->nullable();
			$table->string('C_ANNEE_ACA', 150)->nullable();
			$table->boolean('B_DEBITEUR')->nullable();
			$table->decimal('N_SOLDE')->nullable();
			$table->string('C_IBAN', 32)->nullable();
			$table->string('C_BIC', 11)->nullable();
			$table->string('C_BADGE', 5)->nullable();
			$table->string('C_BADGE_PROVISOIRE', 5)->nullable();
			$table->string('C_COMMENTAIRE', 255)->nullable();
			$table->string('C_SEXE', 10)->nullable();
			$table->string('C_STATUT', 50)->nullable();
			$table->boolean('B_IS_BOURSIER')->nullable();
			$table->string('C_VCS', 20)->nullable();
			$table->decimal('N_MONTANT_GARANTIE')->nullable();
			$table->date('D_DATE_VERSEMENT')->nullable();
			$table->date('N_FLAG_VERSEMENT')->nullable();
			$table->date('D_DATE_REMBOURSEMENT')->nullable();
			$table->boolean('B_PROMESSE_BAIL')->nullable();
			$table->boolean('B_IS_ENGLISH')->nullable();
			$table->boolean('B_IS_DELEGUE')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('T_SIGNALETIQUE');
	}
}