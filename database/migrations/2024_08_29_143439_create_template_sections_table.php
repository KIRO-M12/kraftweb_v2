<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemplateSectionsTable extends Migration
{
    public function up()
    {
        Schema::create('template_sections', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->json('buttons'); // To store buttons data as a JSON object
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('template_sections');
    }
}
