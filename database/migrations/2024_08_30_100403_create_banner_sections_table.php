<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBannerSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('banner_sections', function (Blueprint $table) {
            $table->id();
            $table->string('tag_title')->nullable();
            $table->string('tag_subtitle')->nullable();
            $table->string('main_title');
            $table->text('rotating_titles')->nullable(); // Store as JSON
            $table->text('description')->nullable();
            $table->string('video_url')->nullable();
            $table->string('tag_1')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('banner_sections');
    }
}
