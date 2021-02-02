<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostModel;
use Faker\Generator as Faker;



$factory->define(PostModel::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->numberBetween($min = 1, $max = 100),
        'title'=> $faker->word,
        'author'=>$faker->name
    ];
});
