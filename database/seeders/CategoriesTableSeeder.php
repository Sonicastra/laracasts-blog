<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Category::create([
			'name' => 'Work',
			'slug' => 'work'
		]);

		Category::create([
			'name' => 'Personal',
			'slug' => 'personal'
		]);

		Category::create([
			'name' => 'Hobbies',
			'slug' => 'hobbies'
		]);
	}
}
