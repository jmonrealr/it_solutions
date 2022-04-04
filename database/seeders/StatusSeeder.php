<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Sequence;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::factory()->count(2)->create(
            new Sequence(
                ['name' => 'En proceso'],
                ['name' => 'Finalizado'],
            )
        );
    }
}
