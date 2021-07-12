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
			$table->string('body_header');
			$table->integer('stamps');
			$table->string('stamp_icon');
			$table->string('condition');
			$table->string('description');
			$table->string('card_use');
			$table->string('contact');
			$table->integer('client_id')->unsigned();
			$table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade');
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
