<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('faq_sections', function (Blueprint $table) {
            $table->id();
            $table->string('header');
            $table->string('sub_header')->nullable();
            $table->string('title');
            $table->text('description');
            $table->timestamps();
        });

        Schema::create('faq_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('faq_section_id')->constrained('faq_sections')->onDelete('cascade');
            $table->string('question');
            $table->text('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('faq_items');
        Schema::dropIfExists('faq_sections');
    }
}
