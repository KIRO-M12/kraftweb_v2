<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplatesTable extends Migration
{
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Title of the template
            $table->string('category'); // Category to filter templates (e.g., ecommerce, blog, etc.)
            $table->text('description'); // Description of the template
            $table->string('icon'); // SVG icon or image URL
            $table->string('bg_color')->default('#F5F5F7'); // Background color for the template card
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('templates');
    }
}
