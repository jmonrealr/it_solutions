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
        Department::factory()->count(11)->create(
            new Sequence(
                ['name' => 'Dirección General'],
                ['name' => 'Finanzas'],
                ['name' => 'Mercadotecnia'],
                ['name' => 'Comunicaciones'],
                ['name' => 'Gestión, planificación y estrategia de servicios'],
                ['name' => 'Atención a clientes y usuarios'],
                ['name' => 'Control de riesgos'],
                ['name' => 'Negocios y apliaciones empresariales'],
                ['name' => 'Desarrollo y nuevas tecnologías'],
                ['name' => 'Sistemas e infraestructuras'],
                ['name' => 'Recursos humanos'],
                )
        );
    }
}
