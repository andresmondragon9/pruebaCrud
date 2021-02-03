<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'precio' => rand(1,1000),
        'cantidad' => rand(1,20),
        'provider_id' => rand(1,5),
    ];
});
