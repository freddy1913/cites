<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
             'rue' => $faker->streetName,
             'num' => $faker->buildingNumber,
             'cp' => $faker->postCode,
             'localite' => $faker->city,
             'pays' => $faker->state,
             'type' => 0
    ];
});
