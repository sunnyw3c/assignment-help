<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::table('services')
            ->where('slug', 'thesis-dissertation')
            ->update(['is_active' => false]);
    }

    public function down(): void
    {
        // Deliberately do not republish an obsolete combined service page.
    }
};
