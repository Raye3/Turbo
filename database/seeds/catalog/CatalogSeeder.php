<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$this->call([
			\App\Seeders\BrandSeeder::class,
			\App\Seeders\ModelSeeder::class,
			\App\Seeders\VehicleSeeder::class,
			\App\Seeders\EngineSeeder::class,
			\App\Seeders\CatalogCategorySeeder::class,
		]);
	}
}