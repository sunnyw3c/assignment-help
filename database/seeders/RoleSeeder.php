<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $roles = ['admin', 'manager', 'writer', 'executive', 'support', 'student'];
        foreach ($roles as $role) {
            Role::firstOrCreate(['name' => $role]);
        }

        // Assign student role to all existing users who have no roles
        User::all()->each(function (User $user) {
            if ($user->roles->isEmpty()) {
                $user->assignRole('student');
            }
        });

        // Create default admin user
        $admin = User::firstOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@admin.com')],
            [
                'name'     => 'Admin',
                'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
            ]
        );

        if (!$admin->hasRole('admin')) {
            $admin->assignRole('admin');
        }
    }
}
