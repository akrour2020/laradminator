<?php

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
        $this->call(users::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(TasksTableSeeder::class);

        if (config('variables.WITH_FAKER')) {
            // FAKE data
        }
    }
}
