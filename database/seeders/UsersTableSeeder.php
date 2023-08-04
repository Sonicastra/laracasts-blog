<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		User::create([
			'name' => 'John Doe',
			'username' => 'john-doe',
			'email' => 'John-Doe@example.com',
			'password' => bcrypt('12345678'),
		]);

		User::create([
			'name' => 'Sarah Doe',
			'username' => 'sarah-doe',
			'email' => 'Sarah-Doe@example.com',
			'password' => bcrypt('12345678'),
		]);

		User::create([
			'name' => 'Lisa Watson',
			'username' => 'lisa-watson',
			'email' => 'Lisa-Watson@example.com',
			'password' => bcrypt('12345678'),
		]);
	}
}
