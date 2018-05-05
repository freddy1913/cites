<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->foreign('signaletique_id')->references('id')->on('T_SIGNALETIQUE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->foreign('chambre_id')->references('id')->on('T_CHAMBRE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->foreign('type_bail_id')->references('id')->on('T_TYPE_BAIL')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->foreign('annee_academique_id')->references('id')->on('T_ANNEE_ACADEMIQUE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_CITES', function(Blueprint $table) {
			$table->foreign('adresse_id')->references('id')->on('T_ADRESSE')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('T_CITES', function(Blueprint $table) {
			$table->foreign('statut_id')->references('id')->on('T_STATUT_CITE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_SIGNALETIQUE', function(Blueprint $table) {
			$table->foreign('categorie_etudiant_id')->references('id')->on('T_CATEGORIE_ETUDIANT')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_SIGNALETIQUE', function(Blueprint $table) {
			$table->foreign('garant_id')->references('id')->on('T_GARANT')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('T_TRANSACTION', function(Blueprint $table) {
			$table->foreign('signaletique_id')->references('id')->on('T_SIGNALETIQUE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_TRANSACTION', function(Blueprint $table) {
			$table->foreign('type_operation_id')->references('id')->on('T_TYPE_OPERATION')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_FACTURE', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('T_LOCATION')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_FACTURE', function(Blueprint $table) {
			$table->foreign('fact_nature_id')->references('id')->on('T_FACT_NATURE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_FACTURE', function(Blueprint $table) {
			$table->foreign('lot_facture_id')->references('id')->on('T_LOT_FACTURE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_AFFECTATION', function(Blueprint $table) {
			$table->foreign('transaction_id')->references('id')->on('T_ANNEE_ACADEMIQUE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_AFFECTATION', function(Blueprint $table) {
			$table->foreign('facture_id')->references('id')->on('T_FACTURE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_CHAMBRE', function(Blueprint $table) {
			$table->foreign('cites_id')->references('id')->on('T_CITES')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_CHAMBRE', function(Blueprint $table) {
			$table->foreign('type_chambre_id')->references('id')->on('T_TYPE_CHAMBRE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_CHAMBRE', function(Blueprint $table) {
			$table->foreign('statut_id')->references('id')->on('T_STATUT_CITE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_UTILISATEUR', function(Blueprint $table) {
			$table->foreign('niv_utilisateur_id')->references('id')->on('T_NIV_UTILISATEUR')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_SIGNALETIQUE_ADRESSE', function(Blueprint $table) {
			$table->foreign('signaletique_id')->references('id')->on('T_SIGNALETIQUE')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('T_SIGNALETIQUE_ADRESSE', function(Blueprint $table) {
			$table->foreign('adresse_id')->references('id')->on('T_ADRESSE')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->foreign('cites_id')->references('id')->on('T_CITES')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->foreign('annee_academique_id')->references('id')->on('T_ANNEE_ACADEMIQUE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->foreign('type_chambre_id')->references('id')->on('T_TYPE_CHAMBRE')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->foreign('typebail_id')->references('id')->on('T_TYPE_BAIL')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->dropForeign('T_LOCATION_signaletique_id_foreign');
		});
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->dropForeign('T_LOCATION_chambre_id_foreign');
		});
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->dropForeign('T_LOCATION_type_bail_id_foreign');
		});
		Schema::table('T_LOCATION', function(Blueprint $table) {
			$table->dropForeign('T_LOCATION_annee_academique_id_foreign');
		});
		Schema::table('T_CITES', function(Blueprint $table) {
			$table->dropForeign('T_CITES_adresse_id_foreign');
		});
		Schema::table('T_CITES', function(Blueprint $table) {
			$table->dropForeign('T_CITES_statut_id_foreign');
		});
		Schema::table('T_SIGNALETIQUE', function(Blueprint $table) {
			$table->dropForeign('T_SIGNALETIQUE_categorie_etudiant_id_foreign');
		});
		Schema::table('T_SIGNALETIQUE', function(Blueprint $table) {
			$table->dropForeign('T_SIGNALETIQUE_garant_id_foreign');
		});
		Schema::table('T_TRANSACTION', function(Blueprint $table) {
			$table->dropForeign('T_TRANSACTION_signaletique_id_foreign');
		});
		Schema::table('T_TRANSACTION', function(Blueprint $table) {
			$table->dropForeign('T_TRANSACTION_type_operation_id_foreign');
		});
		Schema::table('T_FACTURE', function(Blueprint $table) {
			$table->dropForeign('T_FACTURE_location_id_foreign');
		});
		Schema::table('T_FACTURE', function(Blueprint $table) {
			$table->dropForeign('T_FACTURE_fact_nature_id_foreign');
		});
		Schema::table('T_FACTURE', function(Blueprint $table) {
			$table->dropForeign('T_FACTURE_lot_facture_id_foreign');
		});
		Schema::table('T_AFFECTATION', function(Blueprint $table) {
			$table->dropForeign('T_AFFECTATION_transaction_id_foreign');
		});
		Schema::table('T_AFFECTATION', function(Blueprint $table) {
			$table->dropForeign('T_AFFECTATION_facture_id_foreign');
		});
		Schema::table('T_CHAMBRE', function(Blueprint $table) {
			$table->dropForeign('T_CHAMBRE_cites_id_foreign');
		});
		Schema::table('T_CHAMBRE', function(Blueprint $table) {
			$table->dropForeign('T_CHAMBRE_type_chambre_id_foreign');
		});
		Schema::table('T_CHAMBRE', function(Blueprint $table) {
			$table->dropForeign('T_CHAMBRE_statut_id_foreign');
		});
		Schema::table('T_UTILISATEUR', function(Blueprint $table) {
			$table->dropForeign('T_UTILISATEUR_niv_utilisateur_id_foreign');
		});
		Schema::table('T_SIGNALETIQUE_ADRESSE', function(Blueprint $table) {
			$table->dropForeign('T_SIGNALETIQUE_ADRESSE_signaletique_id_foreign');
		});
		Schema::table('T_SIGNALETIQUE_ADRESSE', function(Blueprint $table) {
			$table->dropForeign('T_SIGNALETIQUE_ADRESSE_adresse_id_foreign');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->dropForeign('T_TARIF_cites_id_foreign');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->dropForeign('T_TARIF_annee_academique_id_foreign');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->dropForeign('T_TARIF_type_chambre_id_foreign');
		});
		Schema::table('T_TARIF', function(Blueprint $table) {
			$table->dropForeign('T_TARIF_typebail_id_foreign');
		});
	}
}