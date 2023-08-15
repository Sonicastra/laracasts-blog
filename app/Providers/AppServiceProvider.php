<?php

namespace App\Providers;

use App\Services\MailchimpNewsletter;
use App\Services\Newsletter;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Register any application services.
	 */
	public function register(): void
	{
		app()->bind(Newsletter::class, function () {

			$apiClient = new ApiClient();

			$apiClient->setConfig([
				'apiKey' => config('services.mailchimp.key'),
				'server' => 'us9'
			]);

			return new MailchimpNewsletter($apiClient);
		});
	}

	/**
	 * Bootstrap any application services.
	 */
	public function boot(): void
	{
		//
	}
}
