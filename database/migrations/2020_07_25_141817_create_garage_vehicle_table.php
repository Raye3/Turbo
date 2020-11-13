<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGarageVehicleTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('garage_vehicle', function (Blueprint $table) {
			$table->unsignedBigInteger('garage_id');
			$table->unsignedBigInteger('vehicle_id');
			$table->unique(['garage_id', 'vehicle_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('garage_vehicle');
	}
}
