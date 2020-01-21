<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\product;
use Faker\Generator as Faker;

$factory->define(product::class, function (Faker $faker) {
    return [
        "product_name"=> $faker->word(),
        "category_name"=> $faker->randomElement($array = array ('XXX','YYY','ZZZ','WWW')),
        "description"=> $faker->paragraph,
        "picture"=> $faker->slug,
        "quantity"=> $faker->numberBetween($min = 50, $max = 100),
        "price"=> $faker->numberBetween($min = 1000, $max = 9000),
        "status" => $faker->randomElement($array = array ('0','1')),
        "offer_price"=>$faker->numberBetween($min = 1000, $max = 9000),
    ];
});
