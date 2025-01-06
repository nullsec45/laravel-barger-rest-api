<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user=User::create(
            [
                'name' => 'Fajar Ganteng',
                'email' => 'fajarganteng45@gmail.com',
                'password'=> bcrypt('password123')
            ]
        );

        $user->createToken('FajarGanteng')->plainTextToken;

        User::factory()->count(5)->create();
    }
}
