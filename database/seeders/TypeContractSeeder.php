<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeContract;

class TypeContractSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeContract::factory()->count(2)->create();
    }
}
