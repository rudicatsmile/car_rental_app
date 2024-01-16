<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory(9)->create();

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin Rudi',
            'email' => 'rudi.catsmile@gmail.com',
            'address' => 'Jakarta Utara',
            'phone' => '0865444333',
            'lisence_drive_no' => '777',
            'password' => Hash::make('12345678'),
            'roles' => 'ADMIN',
          
        ]);
    }
}
