<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $array_users = [
            [
                'name' => 'Giorgio',
                'email' => 'gio@mail',
                'password' => Hash::make('12345678!Aa'),
            ],
            [
                'name' => 'Monica',
                'email' => 'moni@mail',
                'password' => Hash::make('12345678!Aa'),
            ],
            [
                'name' => 'Matthew S.',
                'email' => 'matt@mail',
                'password' => Hash::make('12345678!Aa'),
            ],
            [
                'name' => 'Mac',
                'email' => 'mac@mail',
                'password' => Hash::make('12345678!Aa'),
            ]
        ];
        foreach ($array_users as $user) {
            User::create($user);
        }
    }
}
