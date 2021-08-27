<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('cards', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('logo');
			$table->string('color_header');
			$table->string('color_body');
			$table->integer('stamps');
			$table->string('stamp_icon');
			$table->string('region');
			$table->float('gift_price');
			$table->mediumText('condition');
			$table->mediumText('card_use');
			$table->foreignId('client_id')->constrained()->onDelete('cascade');
			$table->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('cards');
	}
}
