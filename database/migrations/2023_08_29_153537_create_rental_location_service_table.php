<?php

use App\Models\RentalLocation;
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rental_location_service', function (Blueprint $table) {
            $table->foreignIdFor(RentalLocation::class);
            $table->foreignIdFor(Service::class);
            $table->primary([ 'rental_location_id', 'service_id' ]);
            $table->boolean("answer");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_location_service');
    }
};
