<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class FixDumbUserErrors extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function($table) {
    		$table->dropForeign('posts_user_id_foreign');
    		$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table) {
    		$table->dropForeign('posts_user_id_foreign');
    		$table->foreign('user_id')->references('id')->on('users');
    		
		});
	}

}
