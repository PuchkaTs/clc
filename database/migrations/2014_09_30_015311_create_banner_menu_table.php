<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBannerMenuTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('banner_menu', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('banner_id')->unsigned()->index();
			$table->foreign('banner_id')->references('id')->on('banners')->onDelete('cascade');
			$table->integer('menu_id')->unsigned()->index();
			$table->foreign('menu_id')->references('id')->on('menu')->onDelete('cascade');
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
		Schema::drop('banner_menu');
	}

}
