<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAboutsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abouts', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('content');
			$table->enum('type', array('intro','museum','visit','contact','job','sitemap'));
			$table->string('cover');
			$table->string('cover_min');
			$table->string('download_cn');
			$table->string('download_en');
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
		Schema::drop('abouts');
	}

}
