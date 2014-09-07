<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('SettingsTableSeeder');
		$this->call('ExhibitionsTableSeeder');
		$this->call('WorksTableSeeder');
		$this->call('ArtistsTableSeeder');
		$this->call('FairsTableSeeder');
		$this->call('MediaTableSeeder');
		$this->call('AboutsTableSeeder');
	}

}
