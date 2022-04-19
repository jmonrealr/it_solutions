<?php

namespace Database\Seeders;

use App\Models\Department;
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
        User::factory()->count(16)->create(
            new Sequence(
                ['name' => 'JosueP',    'email' => '1930168@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'AxelA',     'email' => '1930204@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'JuanC',     'email' => '1930345@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'JordyL',    'email' => '1930136@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'AnaG',      'email' => '1930257@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'KarlaY',    'email' => '1930030@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'AldoP',     'email' => '1930329@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'AdairE',    'email' => '1930441@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'LeoA',      'email' => '1930147@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'MariL',     'email' => '1930140@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'DianaG',    'email' => '1930012@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'FannyV',    'email' => '1930611@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'CarlosF',   'email' => '1930165@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'AmarisA',   'email' => '1930011@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'AndreaJ',   'email' => '1930427@upv.edu.mx', 'password' => Hash::make('password')],
                ['name' => 'JuanN',     'email' => '1930536@upv.edu.mx', 'password' => Hash::make('password')],
            )
        );
        /**
         * Estos de aca som los perfiles asociados a los usuarios, donde esta la información
         * La combinación parcial de estas 2 tablas serían los empleados
         */
        Profile::factory()->count(16)->create(
            new Sequence(
                [
                    'first_name'            =>  'Josue Eliseo',
                    'paternal_last_name'    =>  'Perales',
                    'maternal_last_name'    =>  'Meléndez Y Alcocer',
                    'url_image'             =>  'images/josue.jpeg',
                    'user_id'               =>  '1',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Axel Issai',
                    'paternal_last_name'    =>  'Alemán',
                    'maternal_last_name'    =>  'Delgado',
                    'url_image'             =>  'images/axel.png',
                    'user_id'               =>  '2',
                    'age'                   =>  '21',
                ],
                [
                    'first_name'            =>  'Juan Carlos',
                    'paternal_last_name'    =>  'Monreal',
                    'maternal_last_name'    =>  'Romero',
                    'url_image'             =>  'images/juan.jpeg',
                    'user_id'               =>  '3',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Jordy',
                    'paternal_last_name'    =>  'Lagunas',
                    'maternal_last_name'    =>  'Higuera',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=JL',
                    'user_id'               =>  '4',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Ana Gabriela',
                    'paternal_last_name'    =>  'López',
                    'maternal_last_name'    =>  'Reyes',
                    'url_image'             =>  'images/gabriela.jpeg',
                    'user_id'               =>  '5',
                    'age'                   =>  '21',
                ],
                [
                    'first_name'            =>  'Karla Yaneth',
                    'paternal_last_name'    =>  'Martínez',
                    'maternal_last_name'    =>  'Quintanilla',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=KY',
                    'user_id'               =>  '6',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Aldo',
                    'paternal_last_name'    =>  'Puga',
                    'maternal_last_name'    =>  'Vega',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=AP',
                    'user_id'               =>  '7',
                    'age'                   =>  '21',
                ],
                [
                    'first_name'            =>  'Adaír Eliseo',
                    'paternal_last_name'    =>  'Rojas',
                    'maternal_last_name'    =>  'Oaxaca',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=AE',
                    'user_id'               =>  '8',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Leonardo Ambrosio',
                    'paternal_last_name'    =>  'Linares',
                    'maternal_last_name'    =>  'López',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=LA',
                    'user_id'               =>  '9',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Mariana Leilany',
                    'paternal_last_name'    =>  'Pineda',
                    'maternal_last_name'    =>  'Amador',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=ML',
                    'user_id'               =>  '10',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Diana Gabriela',
                    'paternal_last_name'    =>  'González',
                    'maternal_last_name'    =>  'Reyes',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=DG',
                    'user_id'               =>  '11',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Estefany Saraí',
                    'paternal_last_name'    =>  'Hernández',
                    'maternal_last_name'    =>  'Vidales',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=ES',
                    'user_id'               =>  '12',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Carlos Francisco',
                    'paternal_last_name'    =>  'Monarrez',
                    'maternal_last_name'    =>  'Cruz',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=CF',
                    'user_id'               =>  '13',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Amaris Aglahel',
                    'paternal_last_name'    =>  'Cerda',
                    'maternal_last_name'    =>  'Porras',
                    'url_image'             =>  'images/amaris.jpeg',
                    'user_id'               =>  '14',
                    'age'                   =>  '21',
                ],
                [
                    'first_name'            =>  'Andrea Joseline',
                    'paternal_last_name'    =>  'Charles',
                    'maternal_last_name'    =>  'Santos',
                    'url_image'             =>  'images/andrea.jpeg',
                    'user_id'               =>  '15',
                    'age'                   =>  '20',
                ],
                [
                    'first_name'            =>  'Juan de Dios',
                    'paternal_last_name'    =>  'Nava',
                    'maternal_last_name'    =>  'Gallardo',
                    'url_image'             =>  'https://via.placeholder.com/800x600.png/00aaee/000000?text=JN',
                    'user_id'               =>  '16',
                    'age'                   =>  '20',
                ],
            )
        );
        // User::factory()->count(20)->create();
        // Profile::factory()->count(20)->create(
        //     new Sequence(
        //         ['user_id' => '5'],
        //         ['user_id' => '6'],
        //         ['user_id' => '7'],
        //         ['user_id' => '8'],
        //         ['user_id' => '9'],
        //         ['user_id' => '10'],
        //         ['user_id' => '11'],
        //         ['user_id' => '12'],
        //         ['user_id' => '13'],
        //         ['user_id' => '14'],
        //         ['user_id' => '15'],
        //         ['user_id' => '16'],
        //         ['user_id' => '17'],
        //         ['user_id' => '18'],
        //         ['user_id' => '19'],
        //         ['user_id' => '20'],
        //         ['user_id' => '21'],
        //         ['user_id' => '22'],
        //         ['user_id' => '23'],
        //         ['user_id' => '24'],
        //     )
        // );


        $departments = Department::all();

        User::all()->each(function ($user) use ($departments){
            $user->departments()->attach(
                $departments->random(1)->pluck('id')
            );
        });

    }
}
