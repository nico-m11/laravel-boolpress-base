<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\PostModel;
use Faker\Generator as Faker;



$factory->define(PostModel::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->unique()->numberBetween(1, 10),
        'title'=> $faker->word,
        'author'=>$faker->name
    ];
});
