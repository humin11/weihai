<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exhibitions', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->date('opentime');
			$table->date('starttime');
			$table->date('endtime');
			$table->text('summary');
			$table->text('description');
			$table->string('cover');
			$table->string('cover_min');
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
		Schema::drop('exhibitions');
	}

}
