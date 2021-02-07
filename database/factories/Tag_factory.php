<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TagModel;
use Faker\Generator as Faker;

$factory->define(TagModel::class, function (Faker $faker) {
    return[
        'id'=>$faker->unique()->numberBetween(1, 10),
        'name'=>$faker->name          
    ];
});
