<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApproachHeadersTable extends Migration
{
    public function up()
    {
        Schema::create('approach_headers', function (Blueprint $table) {
            $table->id();
            $table->string('header_text');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('approach_headers');
    }
}
