<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Sequence;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::factory()->count(3)->create(
            new Sequence(
                ['name' => 'Recursos humanos'],
                ['name' => 'Desarrollo y nuevas Tecnologías'],
                ['name' => 'Bases de Datos'],)
        );
    }
}
