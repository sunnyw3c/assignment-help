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
            $table->foreignId('user_id')->nullable()->after('id')->constrained()->onDelete('cascade');
            $table->string('service_type')->nullable()->after('user_id');
            $table->unsignedBigInteger('service_id')->nullable()->after('service_type');
            $table->string('difficulty')->nullable()->after('academic_level');
            $table->string('assignment_type')->nullable()->after('difficulty');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn(['user_id', 'service_type', 'service_id', 'difficulty', 'assignment_type']);
        });
    }
};
