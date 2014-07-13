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

    // Clear our database
    DB::table('stores')->delete();
    DB::table('malls')->delete();
    DB::table('brands')->delete();
    DB::table('photos')->delete();

    // Seed our tables
		$this->call('MallTableSeeder');
    $this->call('BrandTableSeeder');
    $this->call('StoreTableSeeder');
    $this->call('PhotoTableSeeder');
	}

}
