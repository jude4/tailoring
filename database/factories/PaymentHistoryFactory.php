<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\PaymentHistory;
use Faker\Generator as Faker;

$factory->define(PaymentHistory::class, function (Faker $faker) {

    return [
        'user_id' => $faker->randomDigitNotNull,
        'amount' => $faker->word,
        'status' => $faker->word,
        'deleted_at' => $faker->date('Y-m-d H:i:s'),
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s')
    ];
});
