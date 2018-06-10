<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('location', function(Blueprint $table) {
			$table->foreign('signaletique_id')->references('id')->on('signaletique')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('location', function(Blueprint $table) {
			$table->foreign('chambre_id')->references('id')->on('chambre')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('location', function(Blueprint $table) {
			$table->foreign('type_bail_id')->references('id')->on('type_bail')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('location', function(Blueprint $table) {
			$table->foreign('annee_academique_id')->references('id')->on('annee_academique')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('cites', function(Blueprint $table) {
			$table->foreign('adresse_id')->references('id')->on('adresse')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('cites', function(Blueprint $table) {
			$table->foreign('statut_id')->references('id')->on('statut_cite')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('signaletique', function(Blueprint $table) {
			$table->foreign('categorie_etudiant_id')->references('id')->on('categorie_etudiant')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('signaletique', function(Blueprint $table) {
			$table->foreign('garant_id')->references('id')->on('garant')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('transaction', function(Blueprint $table) {
			$table->foreign('signaletique_id')->references('id')->on('signaletique')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('transaction', function(Blueprint $table) {
			$table->foreign('type_operation_id')->references('id')->on('type_operation')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('facture', function(Blueprint $table) {
			$table->foreign('location_id')->references('id')->on('location')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('facture', function(Blueprint $table) {
			$table->foreign('fact_nature_id')->references('id')->on('fact_nature')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('facture', function(Blueprint $table) {
			$table->foreign('lot_facture_id')->references('id')->on('lot_facture')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('affectation', function(Blueprint $table) {
			$table->foreign('transaction_id')->references('id')->on('annee_academique')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('affectation', function(Blueprint $table) {
			$table->foreign('facture_id')->references('id')->on('facture')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('chambre', function(Blueprint $table) {
			$table->foreign('cites_id')->references('id')->on('cites')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('chambre', function(Blueprint $table) {
			$table->foreign('type_chambre_id')->references('id')->on('type_chambre')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('chambre', function(Blueprint $table) {
			$table->foreign('statut_id')->references('id')->on('statut_cite')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('utilisateur', function(Blueprint $table) {
			$table->foreign('niv_utilisateur_id')->references('id')->on('niv_utilisateur')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('signaletique_adresse', function(Blueprint $table) {
			$table->foreign('signaletique_id')->references('id')->on('signaletique')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('signaletique_adresse', function(Blueprint $table) {
			$table->foreign('adresse_id')->references('id')->on('adresse')
						->onDelete('cascade')
						->onUpdate('no action');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->foreign('cites_id')->references('id')->on('cites')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->foreign('annee_academique_id')->references('id')->on('annee_academique')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->foreign('type_chambre_id')->references('id')->on('type_chambre')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->foreign('typebail_id')->references('id')->on('type_bail')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('location', function(Blueprint $table) {
			$table->dropForeign('location_signaletique_id_foreign');
		});
		Schema::table('location', function(Blueprint $table) {
			$table->dropForeign('location_chambre_id_foreign');
		});
		Schema::table('location', function(Blueprint $table) {
			$table->dropForeign('location_type_bail_id_foreign');
		});
		Schema::table('location', function(Blueprint $table) {
			$table->dropForeign('location_annee_academique_id_foreign');
		});
		Schema::table('cites', function(Blueprint $table) {
			$table->dropForeign('cites_adresse_id_foreign');
		});
		Schema::table('cites', function(Blueprint $table) {
			$table->dropForeign('cites_statut_id_foreign');
		});
		Schema::table('signaletique', function(Blueprint $table) {
			$table->dropForeign('signaletique_categorie_etudiant_id_foreign');
		});
		Schema::table('signaletique', function(Blueprint $table) {
			$table->dropForeign('signaletique_garant_id_foreign');
		});
		Schema::table('transaction', function(Blueprint $table) {
			$table->dropForeign('transaction_signaletique_id_foreign');
		});
		Schema::table('transaction', function(Blueprint $table) {
			$table->dropForeign('transaction_type_operation_id_foreign');
		});
		Schema::table('facture', function(Blueprint $table) {
			$table->dropForeign('facture_location_id_foreign');
		});
		Schema::table('facture', function(Blueprint $table) {
			$table->dropForeign('facture_fact_nature_id_foreign');
		});
		Schema::table('facture', function(Blueprint $table) {
			$table->dropForeign('facture_lot_facture_id_foreign');
		});
		Schema::table('affectation', function(Blueprint $table) {
			$table->dropForeign('affectation_transaction_id_foreign');
		});
		Schema::table('affectation', function(Blueprint $table) {
			$table->dropForeign('affectation_facture_id_foreign');
		});
		Schema::table('chambre', function(Blueprint $table) {
			$table->dropForeign('chambre_cites_id_foreign');
		});
		Schema::table('chambre', function(Blueprint $table) {
			$table->dropForeign('chambre_type_chambre_id_foreign');
		});
		Schema::table('chambre', function(Blueprint $table) {
			$table->dropForeign('chambre_statut_id_foreign');
		});
		Schema::table('utilisateur', function(Blueprint $table) {
			$table->dropForeign('utilisateur_niv_utilisateur_id_foreign');
		});
		Schema::table('signaletique_adresse', function(Blueprint $table) {
			$table->dropForeign('signaletique_adresse_signaletique_id_foreign');
		});
		Schema::table('signaletique_adresse', function(Blueprint $table) {
			$table->dropForeign('signaletique_adresse_adresse_id_foreign');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->dropForeign('tarif_cites_id_foreign');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->dropForeign('tarif_annee_academique_id_foreign');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->dropForeign('tarif_type_chambre_id_foreign');
		});
		Schema::table('tarif', function(Blueprint $table) {
			$table->dropForeign('tarif_typebail_id_foreign');
		});
	}
}