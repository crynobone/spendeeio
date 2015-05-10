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

use App\User;

$factory[User::class] = function ($faker) {
    return [
        'email'          => $faker->email,
        'password'       => str_random(10),
        'remember_token' => str_random(10),
        'subscription'   => User::SUBSCRIPTION_FOREVER,
        'status'         => User::VERIFIED,
    ];
};
