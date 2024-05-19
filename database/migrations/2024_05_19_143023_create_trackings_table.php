<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 */
	public function up(): void {
		Schema::create('m_tracking', function (Blueprint $table) {
			$table->foreignId('serialnumber')->references('serialnumber')->on('m_device');
			$table->double('latitude');
			$table->double('longitude');
			$table->integer('speed');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 */
	public function down(): void {
		Schema::dropIfExists('trackings');
	}
};
