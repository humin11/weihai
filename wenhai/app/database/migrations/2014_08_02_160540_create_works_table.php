<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWorksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('works', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('summary')->nullable();
			$table->text('description')->nullable();
			$table->string('cover')->nullable();
			$table->string('image')->nullable();
			$table->string('cover_min')->nullable();
			$table->string('image_min')->nullable();
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
		Schema::drop('works');
	}

}
