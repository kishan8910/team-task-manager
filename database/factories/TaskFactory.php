<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Task;
use App\User;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->sentence(15),
        'views' => $faker->numberBetween(4,1542),
        'user_id' => User::all()->random()->id,
    ];
});
