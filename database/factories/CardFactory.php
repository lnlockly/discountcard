<?php

namespace Database\Factories;

use App\Models\Card;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CardFactory extends Factory {
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Card::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array
	 */
	public function definition() {
		return [
			'name' => $this->faker->name(),
			'logo' => $this->faker->name(),
			'color_header' => $this->faker->name(),
			'color_body' => $this->faker->name(),
			'stamps' => rand(1, 10),
			'stamp_icon' => $this->faker->name(),
			'gift_price' => 100,
			'condition' => Str::random(10),
			'card_description' => Str::random(10),
			'gift_description' => Str::random(10),
			'card_use' => Str::random(10),
			'contact' => Str::random(10),
			'client_id' => '1',
		];
	}
}
