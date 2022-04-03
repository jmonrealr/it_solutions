<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(
            ['name' => 'Josue','email' => '1930168@gmail.com','password' => 'josue']
        );
        User::factory()->create(
            ['name' => 'Axel','email' => '1930204@gmail.com','password' => 'axel']
        );
        User::factory()->create(
            ['name' => 'Juan Carlos','email' => '1930345@gmail.com','password' => 'juan']
        );
        User::factory()->create(
            ['name' => 'Jordy','email' => '1930136@gmail.com','password' => 'jordy']
        );
               
        User::factory()->count(20)->create();
    }
}
