<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionHeadersTable extends Migration
{
    public function up(): void
    {
        Schema::create('section_headers', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the section
            $table->text('description')->nullable(); // Description of the section
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('section_headers');
    }
}
