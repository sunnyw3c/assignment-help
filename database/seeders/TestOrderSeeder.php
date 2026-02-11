<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Assignment;
use App\Services\LegacyBusinessService;

class TestOrderSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::first() ?: User::create([
            'name' => 'Tester',
            'email' => 'test@example.com',
            'password' => bcrypt('password')
        ]);

        $legacyService = new LegacyBusinessService();
        $orderNumber = $legacyService->generateOrderNumber($user->id);

        $assignment = Assignment::create([
            'user_id' => $user->id,
            'order_number' => $orderNumber,
            'email' => $user->email,
            'service_type' => 'writing',
            'subject' => 'Computer Science',
            'title' => 'AI Impact Test',
            'deadline' => now()->addDays(7),
            'pages' => 2,
            'word_count' => 500,
            'description' => 'Test assignment for ID and Messaging system',
            'status' => 'New',
            'budget' => 50.00,
            'original_price' => 60.00,
            'amount_due' => 50.00,
            'payment_status' => 'unpaid'
        ]);

        $assignment->messages()->create([
            'sender_id' => $user->id,
            'body' => 'Hello, this is a test message from the seeder.',
            'receiver_role' => 'support',
            'type' => 'text'
        ]);

        echo "Test Order Created: " . $orderNumber . "\n";
    }
}
