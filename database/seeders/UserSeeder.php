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
        //
        User::create([
            'name' => 'Antonio',
            'email' => 'thekingtony96@gmail.com',
            'isAdmin' => true,
            'password' => bcrypt('1234567')
        ]);
        
        User::create([
            'name' => 'Humberto',
            'email' => 'humbertodev14@gmail.com',
            'isAdmin' => false,
            'password' => bcrypt('1234567')
        ]);
    }
}
