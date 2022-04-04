<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Risk;

class RiskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Risk::factory()->count(4)->create();
    }
}
