<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceCtasTable extends Migration
{
    public function up(): void
    {
        Schema::create('service_ctas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
            $table->string('cta_title')->nullable(); // Title for the call-to-action
            $table->string('cta_subtitle')->nullable(); // Subtitle for the call-to-action
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('service_ctas');
    }
}
