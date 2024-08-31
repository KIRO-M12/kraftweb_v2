<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeadersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('headers', function (Blueprint $table) {
            $table->id();
            $table->string('desktop_logo')->nullable();
            $table->string('mobile_logo')->nullable();
            $table->json('nav_links')->nullable(); // Store navigation links as JSON
            $table->json('languages')->nullable()->default(json_encode([]));
            $table->string('sign_in_link')->nullable();
            $table->json('nav_links')->nullable()->default(json_encode([]));
            $table->string('promo_video_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('headers');
    }
}
