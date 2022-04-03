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
        /**
         * User es el modelo User,
         * factory es la clase que usas para fabricar estos modelos, 
         * count la cantidad de usuarios que agregas,
         * create para especificar que vas a crear,
         * Sequence lo utlizas para especificar una secuencia,
         * Cada array representa uno de los usuarios que insertas
         * al especificar los corchetes, reescribes los atributos que deseas
         * con un arreglo asociativo.
         * En el primero, se crea el usuario con el nombre Josue, email correspondiente
         * y una contraseña, los demas campos los selecciona del factory
         */  
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
