<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Task;
use App\Comment;
use App\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         factory(Role::class,2)->create();
         factory(User::class, 5)->create();
         factory(Task::class, 5)->create()->each(function($t){
            $t->comments()->save(factory(Comment::class)->make());
         });
    }
}
