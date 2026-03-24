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
        Schema::table('users', function (Blueprint $table) {
            $table->string('photo')->nullable()->after('email');
            $table->string('title')->nullable()->after('photo');
            $table->text('bio')->nullable()->after('title');
            $table->json('expertise')->nullable()->after('bio');
            $table->decimal('rating', 3, 2)->default(5.00)->after('expertise');
            $table->unsignedInteger('experience_years')->default(0)->after('rating');
            $table->unsignedInteger('completed_projects')->default(0)->after('experience_years');
            $table->boolean('is_available')->default(true)->after('completed_projects');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['photo', 'title', 'bio', 'expertise', 'rating', 'experience_years', 'completed_projects', 'is_available']);
        });
    }
};
