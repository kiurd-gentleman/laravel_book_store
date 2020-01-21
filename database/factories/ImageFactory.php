<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Faker\Provider\Image;
use App\Models\productImage;
use Faker\Generator as Faker;

$factory->define(productImage::class, function (Faker $faker) {
    return [
        "product_id"=> $faker->numberBetween($min = 1, $max = 25),
        "product_image"=>'product_images/'. $faker->numberBetween($min = 1, $max = 50).'.jpg',
        /*"product_image"=>'product_images/'.$faker->image(),*/


    ];
});
