<?php

use App\Part;
use App\Review;
use App\User;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$parts = Part::all();
		foreach ($parts as $part) {
			$part->reviews()->createMany(
				factory(Review::class, rand(3, 15))->make([
					'user_id' => User::inRandomOrder()->select('id')->limit(1)->first()->id
				])->toArray()
			);
			$part->reviews()->createMany(
				factory(Review::class, rand(3, 15))->make()->toArray()
			);
		}
	}
}
