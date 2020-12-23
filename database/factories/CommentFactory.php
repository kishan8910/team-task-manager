<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use App\User;
use App\Task;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->paragraph($faker->numberBetween(1,4)),
        'user_id' => User::all()->random()->id,
        'task_id' => Task::all()->random()->id,
        'comment_id' => Comment::all()->random()->id,
    ];
});
