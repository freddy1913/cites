<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSignaletiqueTable extends Migration {

	public function up()
	{
		Schema::create('signaletique', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('categorie_etudiant_id')->unsigned();
			$table->integer('garant_id')->unsigned()->nullable();
			$table->string('matricule', 6)->nullable();
			$table->string('nom', 30)->nullable();
			$table->string('prenom', 20)->nullable();
			$table->string('initial', 4)->nullable();
			$table->string('nationalite', 17)->nullable();
			$table->date('date_de_naissance')->nullable();
			$table->string('telephone', 20)->nullable();
			$table->string('telephone_kot', 20)->nullable();
			$table->string('gsm', 20)->nullable();
			$table->string('mail_umons', 50)->nullable();
			$table->string('mail_personnel', 50)->nullable();
			$table->string('faculte', 150)->nullable();
			$table->string('annee_aca', 150)->nullable();
			$table->boolean('debiteur')->nullable();
			$table->decimal('solde')->nullable();
			$table->string('iban', 32)->nullable();
			$table->string('bic', 11)->nullable();
			$table->string('badge', 5)->nullable();
			$table->string('badge_provisoire', 5)->nullable();
			$table->string('commentaire', 255)->nullable();
			$table->string('sexe', 10)->nullable();
			$table->string('statut', 50)->nullable();
			$table->boolean('is_boursier')->nullable();
			$table->string('vcs', 20)->nullable();
			$table->decimal('montant_garantie')->nullable();
			$table->date('date_versement')->nullable();
			$table->date('flag_versement')->nullable();
			$table->date('date_remboursement')->nullable();
			$table->boolean('is_promesse_bail')->nullable();
			$table->boolean('is_english')->nullable();
			$table->boolean('is_delegue')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('signaletique');
	}
}