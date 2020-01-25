<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Measurement;
use Faker\Generator as Faker;

$factory->define(Measurement::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'product_name' => $faker->word,
        'fabric' => $faker->word,
        'quantity' => $faker->word,
        'length' => $faker->word,
        'bust_size' => $faker->word,
        'shoulder_size' => $faker->word,
        'sleeve_length' => $faker->word,
        'round_curve' => $faker->word,
        'waist_size' => $faker->word,
        'Hip_size' => $faker->word,
        'knee_length' => $faker->word,
        'thigh' => $faker->word,
        'image' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
