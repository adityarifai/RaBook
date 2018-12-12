<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 'admin',
            'password' => bcrypt('admin1'),
        ]);
        DB::table('users')->insert([
            'name' => 'member',
            'email' => 'member@member.com',
            'role' => 'user',
            'password' => bcrypt('member1'),
        ]);
    }
}
