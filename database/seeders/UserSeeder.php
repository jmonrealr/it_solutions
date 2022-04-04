<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Sequence;
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
        /**
         * User es el modelo User,
         * factory es la clase que usas para fabricar estos modelos, 
         * count la cantidad de usuarios que agregas,
         * create para especificar que vas a crear,
         * Sequence lo utlizas para especificar una secuencia,
         * Cada array representa uno de los usuarios que insertas
         * al especificar los corchetes, reescribes los atributos que deseas
         * con un arreglo asociativo.
         * En el primero, se crea el usuario con el nombre JosueP, email correspondiente
         * y una contraseña, los demas campos los selecciona del factory
         */  
        User::factory()->count(4)->create(
            new Sequence(
                ['name' => 'JosueP','email' => '1930168@gmail.com','password' => Hash::make('josue')],
                ['name' => 'AxelA','email' => '1930204@gmail.com','password' => Hash::make('axel')],
                ['name' => 'JuanC','email' => '1930345@gmail.com','password' => Hash::make('juan')],
                ['name' => 'JordyL','email' => '1930136@gmail.com','password' => Hash::make('jordy')],
            )
        );
        /**
         * Estos de aca som los perfiles asociados a los usuarios, donde esta la información
         * La combinación parcial de estas 2 tablas serían los empleados
         */
        Profile::factory()->count(4)->create(
            new Sequence(
                ['first_name' => 'Josue Eliseo','paternal_last_name' => 'Perales Meléndez Y Alcocer','user_id' => '1'],
                ['first_name' => 'Axel Issai','paternal_last_name' => 'Aleman Delgado','user_id' => '2'],
                ['first_name' => 'Juan Carlos','paternal_last_name' => 'Monreal Romero','user_id' => '3'],
                ['first_name' => 'Jordy','paternal_last_name' => 'Lagunas Higuera','user_id' => '4'],
            )
        );
        User::factory()->count(20)->create();
        Profile::factory()->count(20)->create(
            new Sequence(
                ['user_id' => '5'],
                ['user_id' => '6'],
                ['user_id' => '7'],
                ['user_id' => '8'],
                ['user_id' => '9'],
                ['user_id' => '10'],
                ['user_id' => '11'],
                ['user_id' => '12'],
                ['user_id' => '13'],
                ['user_id' => '14'],
                ['user_id' => '15'],
                ['user_id' => '16'],
                ['user_id' => '17'],
                ['user_id' => '18'],
                ['user_id' => '19'],
                ['user_id' => '20'],
                ['user_id' => '21'],
                ['user_id' => '22'],
                ['user_id' => '23'],
                ['user_id' => '24'],
            )
        );

    }
}
