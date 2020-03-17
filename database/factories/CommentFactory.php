<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\Discussion;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        "user_id" => User:: count() ? User::pluck('id')->random() : factory(User::class)->create(),
        'discussion_id'=>Discussion:: count() ? Discussion::pluck('id')->random() : factory(Discussion::class)->create(),
        'comment'=>$faker->paragraph,

    ];
});
