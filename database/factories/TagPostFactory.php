<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\TagPostModel;
use Faker\Generator as Faker;

$factory->define(TagPostModel::class, function (Faker $faker) {
    return [
        'id'=>$faker->unique()->numberBetween(1, 10),
        'post_id'=>$faker->numberBetween(1, 10),
        'tag_id'=>$faker->numberBetween(1, 10),
    ];
});
