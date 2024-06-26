<?php

use App\Models\Condition;
use App\Models\RentalLocation;
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
        Schema::create('condition_rental_location', function (Blueprint $table) {
            $table->foreignIdFor(RentalLocation::class)->constrained();
            $table->foreignIdFor(Condition::class)->constrained();
            $table->primary(['rental_location_id', 'condition_id']);
            $table->boolean("answer");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condition_rental_location');
    }
};
