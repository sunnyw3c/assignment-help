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
            if (! Schema::hasColumn('assignments', 'status')) {
                $table->string('status')->default('pending')->after('budget');
            }
            if (! Schema::hasColumn('assignments', 'tutor_id')) {
                $table->foreignId('tutor_id')->nullable()->constrained('users')->nullOnDelete()->after('status');
            }
        });
    }

    public function down(): void
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign(['tutor_id']);
            $table->dropColumn('tutor_id');
            if (Schema::hasColumn('assignments', 'status')) {
                $table->dropColumn('status');
            }
        });
    }
};
