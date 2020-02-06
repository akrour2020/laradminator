<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        $users = App\User::pluck('id')->toArray();
        $projects = App\Project::pluck('id')->toArray();
        for ($i= 1; $i<= 20; $i++){
            
            array_push($data, [
                'name' =>$faker->name(),
                'user_id' =>$faker->randomElement($users),
                'project_id' =>$faker->randomElement($projects),
                'deadline' =>$faker->dateTime(), 
                'status' =>$faker->boolean(), 

            ]);
        }

        DB::table('tasks')->insert($data);
    }
    
}
