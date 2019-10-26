<?php

use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'use' => $faker->word,
        'name' => $faker->word,
        'description' => $faker->sentence (10),
        'long_description' => $faker->text,
        'thickness' => $faker->numberBetween($min=10,$max=120),
        'm2PerContainer' => $faker->randomFloat(2,2,1150),
        'exWorksCost' => $faker->randomFloat(2,15,20),
        'freightCost' => $faker->randomFloat(2,2500,3000),
        'importationCost' => $faker->randomFloat(2,2400,2500),
        'indirectCost' => $faker->randomFloat(2,1,2),
        'profit' => $faker->randomFloat(2,0.1,1)
    ];
});

