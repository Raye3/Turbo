<?php

declare(strict_types=1);

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;
use Faker\Provider\Fakecar;

$factory->define(Brand::class, function (Faker $faker) {
	$faker->addProvider(new Fakecar($faker));
	$v = $faker->vehicleArray();

	return [
		'name' => $v['brand'],
		'logo' => 'brands/'.$faker->file(
			$sourceDir = 'data/brands',
			$targetDir = storage_path('/app/public/brands'),
			false
		),
	];
});
