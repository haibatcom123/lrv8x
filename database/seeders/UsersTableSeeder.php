<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' = 'HoangDucTruong',
            'email' = 'haibatcom123@gmail.com',
            'password' = 'ohyes123',
            'remember_token' = str_random(10);
        ])
    }

}
