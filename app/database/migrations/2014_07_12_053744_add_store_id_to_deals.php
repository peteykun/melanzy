<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStoreIdToDeals extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('deals', function($table)
    {
      $table->integer('store_id')->unsigned()->nullable();
      $table->foreign('store_id')->references('id')->on('stores');
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
    Schema::table('deals', function($table)
    {
      $table->dropForeign('deals_store_id_foreign');
      $table->dropColumn('store_id');
    });
	}

}
