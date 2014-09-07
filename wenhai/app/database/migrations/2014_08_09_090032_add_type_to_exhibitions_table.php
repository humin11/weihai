<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTypeToExhibitionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('exhibitions', function(Blueprint $table)
		{
			$table->enum('type', array('current','preview','review'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('exhibitions', function(Blueprint $table)
		{
			$table->dropColumn('type');
		});
	}

}
