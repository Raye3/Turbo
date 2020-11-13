<?php

declare(strict_types=1);

use App\Store;
use App\User;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = User::all();
		foreach ($users as $user) {
			$user->store()->create(
				create(Store::class, [], 'make')->toArray()
			);
		}
	}
}
