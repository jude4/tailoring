<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\MeasureCategory;
use Faker\Generator as Faker;

$factory->define(MeasureCategory::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
