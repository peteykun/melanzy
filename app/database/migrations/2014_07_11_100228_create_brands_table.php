<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
    Schema::create('brands', function($table)
    {
      $table->increments('id');
      $table->string('name')->unique();
      $table->string('url')->nullable();
      $table->text('logo')->nullable();     // file
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
		Schema::drop('brands');
	}

}
