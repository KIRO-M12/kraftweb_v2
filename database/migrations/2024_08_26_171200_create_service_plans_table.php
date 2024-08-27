<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_plans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('monthly_price', 10, 2)->default(0.00);
            $table->decimal('annual_price', 10, 2)->default(0.00);
            $table->decimal('lifetime_price', 10, 2)->default(0.00);
            $table->enum('tier', ['basic', 'standard', 'premium', 'professional', 'advanced', 'enterprise', 'free']);
            $table->json('features')->nullable(); // Store features as a JSON array
            $table->json('additional_services')->nullable(); // Store additional services or add-ons
            $table->string('support_level')->default('standard'); // E.g., Standard, Priority, 24/7
            $table->integer('max_users')->default(1); // Max number of users or licenses
            $table->json('tags')->nullable(); // Tags for categorizing or filtering plans
            $table->json('filters')->nullable(); // Filters based on categories like Fitness & Health, Writer, etc.
            $table->json('restrictions')->nullable(); // Any specific restrictions or limits
            $table->string('status')->default('active'); // Active or inactive status
            $table->integer('discount')->default(0); // Discount percentage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service_plans');
    }
}
