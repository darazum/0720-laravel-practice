<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Good::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'category_id' => mt_rand(1, 5),
        'price' => 10 * round(0.1 * mt_rand(100, 1000))
    ];
});
