<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotExhibitionWorkTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('exhibition_work', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('exhibition_id')->unsigned()->index();
			$table->integer('work_id')->unsigned()->index();
			$table->foreign('exhibition_id')->references('id')->on('exhibitions')->onDelete('cascade');
			$table->foreign('work_id')->references('id')->on('works')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('exhibition_work');
	}

}
