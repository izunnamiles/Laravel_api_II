<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discussion;
use App\User;
use Faker\Generator as Faker;

$factory->define(Discussion::class, function (Faker $faker) {
    return [
        //
        "user_id"=>User:: count() ? User::pluck('id')->random() : factory(User::class)->create(),
        'topic'=> $faker ->title,
        'details'=> $faker ->text,
        'option_a'=> $faker ->sentence(10),
        'option_b'=> $faker ->sentence(11),
        'option_c'=> $faker ->sentence(9),
        'option_d'=> $faker ->sentence(9),
        'status'=> $faker ->text,
        'answer'=> $faker -> word,
        'winner_id'=>function(){
        return User::all()->random();
        },
        'amount'=>$faker->numberBetween(500,2000),
        'referee'=>function(){
        return User::all()->random();
        }

    ];
});
