<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHubHeadersTable extends Migration
{
    public function up()
    {
        Schema::create('hub_headers', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->text('header_subtitle')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hub_headers');
    }
}
