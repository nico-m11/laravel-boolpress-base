<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategorieModel;
use Faker\Generator as Faker;

$factory->define(CategorieModel::class, function (Faker $faker) {
    return [
        'title'=>$faker->text,
        'slug'=>$faker->slug
    ];
});
