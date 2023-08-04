<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		Post::create([
			'user_id' => 1,
			'category_id' => 1,
			'title' => 'Laravel v10 Released',
			'slug' => 'laravel-v10-released',
			'intro' => 'Today we\'re thrilled to announce that we have tagged the Laravel 10.0 release!',
			'body' => 'Laravel 10 continues the improvements made in Laravel 9 by introducing argument and return types to all application skeleton methods, as well as all stub files used to generate classes throughout the framework. In addition, a new, developer-friendly abstraction layer has been introduced for starting and interacting with external processes. Further, Laravel Pennant has been introduced to provide a wonderful approach to managing your application\'s feature flags.'
		]);

		Post::create([
			'user_id' => 3,
			'category_id' => 3,
			'title' => 'Forge: Dark Mode',
			'slug' => 'forge-dark-mode',
			'intro' => 'Dark mode is a must-have feature for many developers.',
			'body' => 'Dark mode is a must-have feature for many developers and anyone who uses it often knows just how jarring it is when you\'re thrown into an application or website that doesn\'t support it. Today we\'re pleased to share that Forge now supports dark mode, which can be toggled between light, dark, or automatically switch between modes depending on your operating system settings. We\'re releasing dark mode as a beta feature and will continue to improve it based on your feedback! If you don’t have a Forge account, now is a great time to sign up! Forge allows you to painlessly create and manage PHP servers which include MySQL, Redis, Memcached, database backups, and everything else you need to run robust, modern Laravel applications.'
		]);

		Post::create([
			'user_id' => 2,
			'category_id' => 2,
			'title' => 'Spark 3.0 Now Available!',
			'slug' => 'spark-3.0-now-available',
			'intro' => 'Today we\'re happy to announce that Spark 3.0 is available!',
			'body' => 'Spark Stripe 3.0 includes support for Cashier Stripe 14, offering the latest compatibility enhancements with Stripe. Check out our upgrade guide to update your Spark installation to this new major version. Spark Stripe 3.0 now utilizes Stripe Checkout when initiating subscriptions or updating payment methods within your application. This brings all the power of Stripe Checkout to Spark Stripe.
			Also, Spark Paddle 3.0 has been released and includes minor maintenace improvements and fixes. Please consult our upgrade guide for notes regarding these minor updates. We hope you enjoy these new releases and keep building amazing things!'
		]);

		Post::create([
			'user_id' => 3,
			'category_id' => 3,
			'title' => 'Introducing Volt: An elegantly crafted functional API for Livewire',
			'slug' => 'introducing-volt-an-elegantly-crafted-functional-api-for-livewire',
			'intro' => 'Yesterday, we released released Laravel Folio, a powerful page-based router designed to simplify routing in Laravel applications.',
			'body' => 'While Laravel Folio is great for static pages, it doesn\'t support the rich interactivity many users have come to expect from modern web applications. For that, we\'re launching another new package: Volt. Volt is an elegantly crafted functional API for Livewire, allowing component\'s PHP logic and Blade templates to coexist in the same file. Behind the scenes, the functional API is compiled to Livewire class components and linked with the template present in the same file.'
		]);
	}
}
