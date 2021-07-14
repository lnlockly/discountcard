<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiftsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('gifts', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id')->unsigned()->nullable();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
			$table->integer('card_id')->unsigned();
			$table->foreign('card_id')->references('id')->on('cards')->onDelete('cascade');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('gifts');
	}
}
