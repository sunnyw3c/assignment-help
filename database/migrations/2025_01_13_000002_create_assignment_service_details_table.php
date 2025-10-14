<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('assignment_service_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assignment_service_id')->constrained()->onDelete('cascade');
            $table->string('hero_title')->nullable();
            $table->string('hero_subtitle')->nullable();
            $table->text('hero_description')->nullable();
            $table->json('what_we_offer')->nullable();
            $table->json('pricing_tiers')->nullable();
            $table->json('process_steps')->nullable();
            $table->json('sample_topics')->nullable();
            $table->json('testimonials')->nullable();
            $table->json('faqs')->nullable();
            $table->json('citation_styles')->nullable();
            $table->json('deliverables')->nullable();
            $table->json('guarantees')->nullable();
            $table->timestamps();

            $table->index('assignment_service_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_service_details');
    }
};
