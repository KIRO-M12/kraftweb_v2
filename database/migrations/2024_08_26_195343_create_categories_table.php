<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('type')->default('service'); // New: Category type (e.g., service, product, etc.)
            $table->json('tags')->nullable(); // New: Tags for categorization
            $table->boolean('is_active')->default(true); // New: Status to enable/disable categories
            $table->timestamps();
        });

        Schema::create('category_service_plan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
            $table->foreignId('service_plan_id')->constrained('service_plans')->onDelete('cascade');
            $table->json('services'); // Store services as a JSON array
            $table->decimal('discount', 5, 2)->default(0.00); // New: Discount on the services in this category
            $table->enum('status', ['active', 'inactive'])->default('active'); // New: Status for the service plan category link
            $table->json('filters')->nullable(); // New: Filters for categorizing the services
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_service_plan');
        Schema::dropIfExists('categories');
    }
}
