<?php
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \App\Project::truncate();
        \App\Area::truncate();
        DB::table('feature_project')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        Model::unguard();

		 $this->call('ProjectsTableSeeder');
		 $this->call('FeaturesTableSeeder');
		 $this->call('FeatureProjectTableSeeder');
	}

}
