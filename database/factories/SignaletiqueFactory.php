<?php

use Faker\Generator as Faker;

$factory->define(App\models\Signaletique::class, function (Faker $faker) {
    return [
             'matricule' => $faker->numberBetween(100000, 999999) ,
             'nom' =>  $faker->lastName,
             'prenom' => $faker->firstName(),
             'initial' => null,
             'nationalite' => 'Belge',
             'date_de_naissance' => $faker->dateTimeThisCentury->format('d/m/Y'), 
             'telephone' => $faker->e164PhoneNumber,
             'telephone_kot' => $faker->e164PhoneNumber,
             'gsm' => $faker->e164PhoneNumber,
             'mail_umons' => $faker->firstName().$faker->lastName.'@umons.ac.be',
             'mail_personnel' => $faker->email,
             'faculte' => 'Faculte',
             'annee_aca' => 'Bachelier en sciences de gestion, sciences économiques et de gestion, ingénieur de gestion',
             'debiteur' => false,
             'solde' => null,
             'iban' => $faker->iban('BE'),
             'bic' => $faker->swiftBicNumber,
             'badge' => $faker->numberBetween(10000, 99999),
             'badge_provisoire' => null,
             'commentaire' => null,
             'categorie_etudiant_id' => 1,
             'sexe' => $faker->numberBetween(1, 2),
             'statut' => null,
             'is_boursier' => $faker->boolean,
             'vcs' => null,
             'garant_id' => null,
             'montant_garantie' => $faker->numberBetween(100,500),
             'date_versement' => null,
             'flag_versement' => null,
             'date_remboursement' => null,
             'is_promesse_bail' => $faker->boolean,
             'is_english' => $faker->boolean,
             'is_delegue' => $faker->boolean

    ];
});


