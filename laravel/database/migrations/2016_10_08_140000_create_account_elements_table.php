<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountElementsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('account_elements', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id')->unsigned()->index();
			$table->integer('element_type')->unsigned()->index();
			$table->string('name');
			$table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('transaction_entries');
		Schema::dropIfExists('account_elements');
	}
}
