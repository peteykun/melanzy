<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
  public function up()
  {
    Schema::create('stores', function($table)
    {
      $table->increments('id');
      $table->string('name');
      $table->string('shop_number')->nullable();
      $table->string('floor')->nullable();
      $table->integer('mall_id')->unsigned()->nullable();
      $table->foreign('mall_id')->references('id')->on('malls');
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
    Schema::drop('stores');
  }

}
