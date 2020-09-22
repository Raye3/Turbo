<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Client;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ClientTest extends TestCase
{
	use DatabaseMigrations;

	/**
	 * Assert clients can be created.
	 */
	public function test_that_we_can_create_a_client(): void
	{
		$this->login();
		$client = factory(Client::class)->create();
		$this->assertInstanceOf(Client::class, $client);
	}
}
