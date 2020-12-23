<?php

use Illuminate\Database\Seeder;
use App\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'title' => Str::random(10),
            'content' =>  Str::random(3).' '.Str::random(10).' '.Str::random(6).' '.Str::random(10).' '.Str::random(4).' '.Str::random(10).' '.Str::random(3).' '.Str::random(3).' '.Str::random(5),
            'views' => random_int(5,1567),
            'user_id' => User::inRandomOrder()->first()->id
        ]);


        factory(App\Task::class, 5)->create();


    }
}
