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
        Schema::table('assignments', function (Blueprint $table) {
            $table->foreignId('assignment_service_id')->nullable()->after('budget')->constrained('assignment_services')->onDelete('set null');
            $table->string('academic_level')->nullable()->after('assignment_service_id');
            $table->string('citation_style')->nullable()->after('academic_level');
            $table->integer('word_count')->nullable()->after('citation_style');
            $table->text('specific_requirements')->nullable()->after('word_count');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign(['assignment_service_id']);
            $table->dropColumn([
                'assignment_service_id',
                'academic_level',
                'citation_style',
                'word_count',
                'specific_requirements'
            ]);
        });
    }
};
