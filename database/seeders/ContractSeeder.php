<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contract;
use App\Models\TypeContract;
use App\Models\Project;

class ContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contract::factory()->count(10)
        //->forStatus([
        //    'name' => 'activo',
        //])
        //->forType_Contract([
        //    'name' => 'básico',
        //])
        //->has(Project::factory()->count(1))
        ->create();
    }
}
