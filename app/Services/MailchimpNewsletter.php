<?php

namespace App\Services;

use MailchimpMarketing\ApiClient;

class MailchimpNewsletter implements Newsletter
{
	public function __construct( protected ApiClient $apiClient )
	{
	}

	public function subscribe( string $email, string $list = null )
	{
		$list ??= config('services.mailchimp.lists.subscribers');

		return $this->apiClient->lists->addListMember($list, [
			'email_address' => $email,
			'status' => 'subscribed'
		]);
	}
}

