<?php

use App\Models\District;
use App\Models\Town;
use App\Models\User;
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
        Schema::create('rental_locations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(User::class)->constrained();
            $table->integer("rooms");
            $table->string("coordinates");
            $table->foreignIdFor(District::class)->constrained();
            $table->string("address");
            $table->integer("price");
            $table->string("image")->nullable(); // Agregar columna para la imagen
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_locations');
    }
};
