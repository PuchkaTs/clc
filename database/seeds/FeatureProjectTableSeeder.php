<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class FeatureProjectTableSeeder extends Seeder {

    public function run()
    {
        $faker = Faker::create();
        $projectIds = \App\Project::lists('id');
        $featureIds = \App\Feature::lists('id');

        foreach (range(1, 20) as $index)
        {
            DB::table('feature_project')->insert([
                'project_id' => $faker->randomElement($projectIds),
                'feature_id'=>$faker->randomElement($featureIds)
            ]);
        }
    }

}