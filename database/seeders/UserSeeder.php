<?php

namespace Database\Seeders;

use App\Models\User;
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

        $user1 = User::create([

            "name" => "Maria",
            "last_name" => "Guada Rama",
            "ci" => "1234567",
            "charge" => "Doctor",
            "type_user_id" => 2,
            "password" => Hash::make("doctor"),
        ]);

        $user2 = User::create([
            
            "name" => "José",
            "last_name" => "Aureliano",
            "ci" => "7894561",
            "charge" => "Enfermero",
            "type_user_id" => 2,
            "password" => Hash::make("enfermero"),
        ]);

        $user3 = User::create([
            
            "name" => "Oscar",
            "last_name" => "Castellanos",
            "ci" => "0123",
            "charge" => "Encargado",
            "type_user_id" => 1,
            "password" => Hash::make("encargado"),
        ]);

        $user1->assignRole('user');
        $user2->assignRole('user');
        $user3->assignRole('admin');


    }
}
