<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'firstName' => 'Arisha',
            'lastName' => 'Protichi',
            'email' => 'arisha@gmail.com',
            'mobile' => '1234567890',
            'password' => '1234',
        ]);
    }
}
