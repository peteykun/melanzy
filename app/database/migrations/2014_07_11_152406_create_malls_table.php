<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMallsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('malls', function($table)
    {
      $table->increments('id');
      $table->string('name');
      $table->text('logo')->nullable();     // file
      $table->string('url')->nullable();
      $table->double('latitude', 9, 6);
      $table->double('longitude', 9, 6);
      $table->string('address_line1');
      $table->string('address_line2')->nullable();
      $table->string('address_city');
      $table->string('address_state');
      $table->integer('address_pin')->unsigned();
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
		Schema::drop('malls');
	}

}
