<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('footer_sections', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->json('additions')->nullable();
            $table->string('bold_text'); // Add this line
            $table->text('description');
            $table->string('cta_text');
            $table->string('cta_link');
            $table->string('footer_note')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('footer_sections');
    }
};
