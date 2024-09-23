<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('about_sections', function (Blueprint $table) {
            $table->id();
            $table->string('highlighted_text_poster');
            $table->string('main_title');
            $table->string('main_image');
            $table->text('main_content_intro');
            $table->text('main_content_detail');
            $table->json('additional_sections')->nullable(); // Contains sections like 'Who Are We' and 'Invite a Friend'
            $table->json('icons')->nullable();
            $table->json('references')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('about_sections');
    }
}
