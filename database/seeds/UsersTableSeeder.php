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
    	        DB::table('roles')->insert([
            [
                'name' => 'МО',
                'display_name' => 'Мед. орг.',
            ],
            [
                'name' => 'СМО',
                'display_name' => 'Страх. орг.',
            ],

        ]);


        DB::table('users')->insert([
            [
                'name' => '070301',
                'email' => '070301@mail.dev',
                'password' => bcrypt('secret'),
                'role_id' => 1,
            ],
            [
                'name' => '070501',
                'email' => '070501@mail.dev',
                'password' => bcrypt('secret'),
                'role_id' => 1,
            ],
            [
                'name' => '07004',
                'email' => '07004@yandex.dev',
                'password' => bcrypt('secret'),
                'role_id' => 2,
            ],
            [
                'name' => '070510',
                'email' => '070510@mail.dev',
                'password' => bcrypt('secret'),
                'role_id' => 1,
            ],

        ]);
        //
    }
}
