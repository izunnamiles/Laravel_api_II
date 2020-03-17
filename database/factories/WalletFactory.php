<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Wallet;
use Faker\Generator as Faker;

$factory->define(Wallet::class, function (Faker $faker) {
    return [
        //
        "user_id" => User:: count() ? User::pluck('id')->random() : factory(User::class)->create(),
        "card_no" => $faker->numberBetween(500000,10000000),
        "card_exp_date" => $faker->numberBetween(500000,10000000),
        "cvv" => $faker->numberBetween(100,999),
        "amount" => $faker->numberBetween(1000,10000),
        "total_amount" => $faker->numberBetween(1000,10000),

    ];
});
