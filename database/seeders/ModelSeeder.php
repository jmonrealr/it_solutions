<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Models;

class ModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Models::factory()->count(10)->create();
    }
}
