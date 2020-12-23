<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_name' => Str::random('ADMIN_USER', 'REGULAR_USER'),
        ]);

        factory(Role::class, 2)->create();
    }
}
