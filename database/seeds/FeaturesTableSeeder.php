<?php

use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
use Laracasts\TestDummy\Factory as TestDummy;

class FeaturesTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(10)->create('App\Feature');
    }

}