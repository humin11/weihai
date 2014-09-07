<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFairsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fairs', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name');
			$table->text('content');
			$table->enum('type', array('internal','abroad'));
			$table->string('cover') -> nullable();
			$table->string('cover_min') -> nullable();
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
		Schema::drop('fairs');
	}

}
