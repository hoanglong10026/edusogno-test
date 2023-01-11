<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Marco',
                'last_name' => 'Rossi',
                'email' => 'ulysses200915@varen8.com',
                'password' => 'Edusogno123'
            ],
            [
                'name' => 'Filippo',
                'last_name' => 'D’Amelio',
                'email' => 'qmonkey14@falixiao.com',
                'password' => 'Edusogno?123'
            ],
            [
                'name' => 'Gian Luca',
                'last_name' => 'Carta',
                'email' => 'mavbafpcmq@hitbase.net',
                'password' => 'EdusognoCiao'
            ],
            [
                'name' => 'Stella',
                'last_name' => 'De Grandis',
                'email' => 'dgipolga@edume.me',
                'password' => 'EdusognoGia'
            ],

        ];

        foreach ($users as $user ) {

            DB::table('users')->insert([
                'name' => $user['name'],
                'last_name' => $user['last_name'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
            ]);
        }



    }
}
