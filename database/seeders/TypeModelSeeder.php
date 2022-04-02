<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TypeModel;

class TypeModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeModel::factory()->count(3)->create();
    }
}
