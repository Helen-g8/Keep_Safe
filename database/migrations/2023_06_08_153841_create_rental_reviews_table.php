<?php

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
        Schema::create('rental_reviews', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer("stars");
            $table->string("comment");
            $table->foreignIdFor(RentalLocation::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_reviews');
    }
};
