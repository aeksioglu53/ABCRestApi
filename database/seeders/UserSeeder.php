<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
            ['id' => 1, 'name' => 'Client1', 'email' => 'client1@abc.test', 'password' => '123123'],
            ['id' => 2, 'name' => 'Client2', 'email' => 'client2@abc.test', 'password' => '123123'],
            ['id' => 3, 'name' => 'Client3', 'email' => 'client3@abc.test', 'password' => '123123'],
        ];

        foreach ($users as $arr) {
            $arr['password'] = Hash::make($arr['password']);
            User::updateOrCreate($arr);
        }
    }
}
