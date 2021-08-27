<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardUserTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('card_user', function (Blueprint $table) {
			$table->id();
			$table->foreignId('user_id')->constrained()->onDelete('set null');
			$table->foreignId('card_id')->constrained()->onDelete('set null');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('card_users');
	}
}
