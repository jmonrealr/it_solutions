<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(4)->create(
            new Sequence(
                ['name' => 'Josue','email' => '1930168@gmail.com','password' => 'josue'],
                ['name' => 'Axel','email' => '1930204@gmail.com','password' => 'axel'],
                ['name' => 'Juan Carlos','email' => '1930345@gmail.com','password' => 'juan'],
                ['name' => 'Jordy','email' => '1930136@gmail.com','password' => 'jordy'],
            )
        );
         
        User::factory()->count(20)->create();
    }
}
