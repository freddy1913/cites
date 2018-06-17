<?php

use Faker\Generator as Faker;

$factory->define(App\models\Adresse::class, function (Faker $faker) {
    return [
             'rue' => $faker->streetName,
             'num' => $faker->buildingNumber,
             'cp' => $faker->numberBetween('7000','8000'),
             'localite' => $faker->city,
             'pays' => $faker->state,
             'type' => 0
    ];
});
