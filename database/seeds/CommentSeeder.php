<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\User;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'content' =>  Str::random(3).' '.Str::random(10).' '.Str::random(6).' '.Str::random(10).' '.Str::random(4).' '.Str::random(10).' '.Str::random(3).' '.Str::random(3).' '.Str::random(5),
            'user_id' => User::inRandomOrder()->first()->id,
            'task_id' => Task::inRandomOrder()->first()->id,
        ]);

        factory(App\Comment::class, 5)->create();
    }
}
