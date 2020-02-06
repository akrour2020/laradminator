<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
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
        for ($i= 1; $i<= 2; $i++){
            
            array_push($data, [
                'name' =>$faker->name(),
                'user_id' =>$faker->randomElement($users),
                'deadline' =>$faker->dateTime(), 

            ]);
        }

        DB::table('projects')->insert($data);
    }
}
