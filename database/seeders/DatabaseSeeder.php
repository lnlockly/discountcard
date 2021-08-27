<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run() {
		Admin::create([
			'name' => 'stempelnadmin',
			'password' => Hash::make('Barnaul&2021$NINK'),
		]);
	}
}
