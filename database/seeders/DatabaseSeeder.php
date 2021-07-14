<?php

namespace Database\Seeders;

use App\Models\Card;
use App\Models\Gift;
use App\Models\Stamp;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		Card::factory(1)
			->has(User::factory(10))
			->has(Stamp::factory(100))
			->has(Gift::factory(rand(10, 15)))
			->create();
	}
}
