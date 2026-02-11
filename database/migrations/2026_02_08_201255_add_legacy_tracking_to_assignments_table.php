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
            $table->decimal('original_price', 10, 2)->nullable()->after('budget');
            $table->string('discount_code')->nullable()->after('original_price');
            $table->string('payment_status')->default('unpaid')->after('discount_code'); // unpaid, partial, paid
            $table->decimal('amount_paid', 10, 2)->default(0)->after('payment_status');
            $table->decimal('amount_due', 10, 2)->default(0)->after('amount_paid');
            $table->foreignId('tutor_id')->nullable()->after('user_id')->constrained('users')->onDelete('set null');
            $table->dateTime('tutor_deadline')->nullable()->after('deadline');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('assignments', function (Blueprint $table) {
            $table->dropForeign(['tutor_id']);
            $table->dropColumn(['original_price', 'discount_code', 'payment_status', 'amount_paid', 'amount_due', 'tutor_id', 'tutor_deadline']);
        });
    }
};
