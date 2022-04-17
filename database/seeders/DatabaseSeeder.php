<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([//This is the way
            DepartmentSeeder::class,
            UserSeeder::class,
            AnnouncementSeeder::class,
            CommentSeeder::class,
            TypeContractSeeder::class,
            StatusSeeder::class,
            TypeModelSeeder::class,
            ModelSeeder::class,
            StatusSeeder::class,
            ContractSeeder::class,
            CustomerSeeder::class,
            ProjectSeeder::class,
            QuestionSeeder::class,
            AnswerSeeder::class,
            RiskSeeder::class,
            TaskSeeder::class,
            EventSeeder::class,
        ]);
    }
}
