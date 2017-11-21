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
        // reset the users table
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        // generate 3 users/author
        DB::table('users')->insert([
            [
                'name'    => 'jhon De',
                'email'   => 'jhonde@example.com',
                'password'=> bcrypt('secret'),
            ],

            [
                'name'    => 'jhon Ru',
                'email'   => 'jhonru@example.com',
                'password'=> bcrypt('secret'),
            ],

            [
                'name'    => 'jhon Chena',
                'email'   => 'jhonchena@example.com',
                'password'=> bcrypt('secret'),
            ],
        ]);
    }
}
