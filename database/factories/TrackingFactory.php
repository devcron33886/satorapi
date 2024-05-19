<?php

namespace Database\Factories;

use App\Models\Tracking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tracking>
 */
class TrackingFactory extends Factory {
	/**
	 * The name of the factory's corresponding model.
	 *
	 * @var string
	 */
	protected $model = Tracking::class;

	/**
	 * Define the model's default state.
	 *
	 * @return array<string, mixed>
	 */
	public function definition(): array {
		return [
			'serialnumber' => $this->faker->numberBetween(5, 1000),
			'latitude' => $this->faker->latitude(),
			'longitude' => $this->faker->longitude(),
			'speed' => $this->faker->numberBetween(0, 70),
		];
	}
}
