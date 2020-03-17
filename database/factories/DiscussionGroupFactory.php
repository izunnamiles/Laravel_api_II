<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Discussion;
use App\Discussion_Group;
use App\User;
use Faker\Generator as Faker;

$factory->define(Discussion_Group::class, function (Faker $faker) {
    return [
        //
        "user_id" =>function(){
        return User::all()->random();
        },
        'discussion_id'=>Discussion:: count() ? Discussion::pluck('id')->random() : factory(Discussion::class)->create(),
        'status'=>$faker->word,
        'payment_status'=>$faker->word,
    ];
});

