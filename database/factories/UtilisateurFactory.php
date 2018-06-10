<?php

use Faker\Generator as Faker;

$factory->define(App\models\Utilisateur::class, function (Faker $faker) {
    return [
            'niv_utilisateur_id' => $faker->numberBetween(1,3),
            'matricule' => $faker->numberBetween(100000,999999),
            'nom' => $faker->lastName,
            'prenom' =>	$faker->FirstName,
            'password' => '/'
    ];
});
