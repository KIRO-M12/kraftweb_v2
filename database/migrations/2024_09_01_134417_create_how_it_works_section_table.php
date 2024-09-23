<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHowItWorksSectionTable extends Migration
{
    public function up(): void
    {
        Schema::create('how_it_works_sections', function (Blueprint $table) {
            $table->id();
            $table->string('banner_title')->nullable();
            $table->string('background_color')->default('#4384ea');
            $table->text('trusted_companies_text')->nullable();
            $table->json('trusted_companies_logos')->nullable();
            $table->text('intro_text')->nullable();
            $table->json('steps')->nullable(); // Steps like "Select a Template", "Explain your idea", etc.
            $table->json('references')->nullable(); // References such as "Browse documentation" or "submit a ticket"
            $table->string('image_path')->nullable(); // Path for image at the end of the section
            $table->json('additional_sections')->nullable(); // Additional sections for "Invite a Friend", "Affiliate System", etc.
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('how_it_works_sections');
    }
}
