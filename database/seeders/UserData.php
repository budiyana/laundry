<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'adminbudi@gmail.com',
            ],
            [
                'name' => 'Kasir',
                'username' => 'kasir',
                'password' => bcrypt('123456'),
                'level' => 2,
                'email' => 'kasirbudi.com',
            ],
            [
                'name' => 'Owner',
                'username' => 'owner',
                'password' => bcrypt('123456'),
                'level' => 3,
                'email' => 'ownerbudi.com',
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}