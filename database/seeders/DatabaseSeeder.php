<?php

/**
 * (ɔ) GrCOTE7 - 2001-2023.
 */

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 */
	public function run(): void
	{
		// \App\Models\User::factory(10)->create();

		\App\Models\User::factory()->create([
			'name'     => 'Gc7',
			'email'    => 'gc7@gmail.com',
			'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
		]);
	}
}
