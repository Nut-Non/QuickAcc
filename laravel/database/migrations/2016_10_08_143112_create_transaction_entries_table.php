<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionEntriesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('transaction_entries', function (Blueprint $table) {
			$table->increments('id');
			$table->integer('transaction_id')->unsigned()->index();
			$table->integer('account_elements_id')->unsigned()->index();
			$table->boolean('debit_credit');
			$table->float('amount')->unsigned();
			$table->timestamps();
			
			$table->foreign('transaction_id')->references('id')->on('transactions');
			$table->foreign('account_elements_id')->references('id')->on('account_elements');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('transaction_entries');
	}
}
