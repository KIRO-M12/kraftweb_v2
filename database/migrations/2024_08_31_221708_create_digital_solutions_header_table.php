<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigitalSolutionsHeaderTable extends Migration
{
    public function up()
    {
        Schema::create('digital_solutions_header', function (Blueprint $table) {
            $table->id();
            $table->string('header_title');
            $table->text('header_description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('digital_solutions_header');
    }
}
