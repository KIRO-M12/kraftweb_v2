<?php

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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('data_target');
            $table->string('discount')->nullable(); // Store discount information
            $table->text('description')->nullable(); // Description of the service
            $table->string('icon')->nullable(); // Store path or class name for an icon
            $table->enum('tier', ['basic', 'standard', 'premium', 'free'])->default('standard');
            $table->boolean('is_active')->default(true); // Service status
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
