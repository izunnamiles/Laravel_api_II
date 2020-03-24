<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        //
        "user_id" =>function(){
            return User::all()->random();
        },
        "reference_code" => $faker->randomAscii,
        "issues" => $faker->text,
        "status"=> $faker-> word(5),
        "date_resolved"=> $faker->time()

    ];
});
