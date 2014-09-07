<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class PivotArtistExhibitionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('artist_exhibition', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('artist_id')->unsigned()->index();
			$table->integer('exhibition_id')->unsigned()->index();
			$table->foreign('artist_id')->references('id')->on('artists')->onDelete('cascade');
			$table->foreign('exhibition_id')->references('id')->on('exhibitions')->onDelete('cascade');
		});
	}



	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('artist_exhibition');
	}

}
