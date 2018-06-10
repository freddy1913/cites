<?php

use Faker\Generator as Faker;

$factory->define(App\models\TypeChambre::class, function (Faker $faker) {
    return [
             "libelle" => $faker->text(5),  
             "description" => $faker->text($faker->numberBetween(20,60)),
             "description_en" => $faker->text($faker->numberBetween(20,60)),
             "place" => $faker->numberBetween(1,3)
    ];
});
