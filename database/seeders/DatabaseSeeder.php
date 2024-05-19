<?php

namespace Database\Seeders;

use App\Models\Device;
use App\Models\Tracking;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 */
	public function run(): void {

		User::factory()->create([
			'name' => 'Test User',
			'email' => 'test@example.com',
		]);

		Device::factory(200)->create();
		Tracking::factory(400)->create();
	}
}
