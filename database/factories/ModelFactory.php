<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;
    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function(Faker\Generator $faker){
    
    $status = \App\Status::pluck('id')->toArray();
    
    $users = \App\User::pluck('id')->toArray();
    
    return [
        'title' => $faker->sentence(4, true),
        'body' => $faker->text,
        'status_id' => $faker->randomElement($status),
        'user_id' => $faker->randomElement($users),
    ];
});

$factory->define(App\Comment::class, function(Faker\Generator $faker){
    
    $posts = \App\Post::pluck('id')->toArray();
    
    return [
        'body' => $faker->text,
        'post_id' => $faker->randomElement($posts),
    ];
});

