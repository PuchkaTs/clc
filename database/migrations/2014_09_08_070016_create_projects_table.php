<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->boolean('available');
            $table->integer('price')->unsigned();
            $table->double('xloc');
            $table->double('yloc');
            $table->tinyInteger('rooms');
            $table->tinyInteger('bathrooms');
            $table->smallInteger('size');
            $table->smallInteger('year')->unsigned();

            $table->integer('area_id');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
