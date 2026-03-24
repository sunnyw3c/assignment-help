<?php

namespace App\Http\Controllers\Api\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = User::with('roles')->latest();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(fn($q) => $q->where('name', 'like', "%{$search}%")
                                      ->orWhere('email', 'like', "%{$search}%"));
        }
        if ($request->filled('role')) {
            $query->role($request->role);
        }

        return response()->json($query->paginate(20));
    }

    public function show(User $user)
    {
        $user->load('roles');
        return response()->json(array_merge($user->toArray(), [
            'role' => $user->getRoleNames()->first(),
        ]));
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
            'name'  => 'sometimes|string|max:255',
            'email' => 'sometimes|email|unique:users,email,' . $user->id,
        ]);
        $user->update($request->only('name', 'email'));
        return response()->json($user->fresh()->load('roles'));
    }

    public function updateRole(Request $request, User $user)
    {
        $request->validate(['role' => 'required|string|exists:roles,name']);
        $user->syncRoles([$request->role]);
        return response()->json([
            'message' => 'Role updated',
            'role'    => $request->role,
        ]);
    }

    // ── Writers ────────────────────────────────────────────────────────────────

    public function writers()
    {
        $writers = User::role('writer')
            ->select('id', 'name', 'email', 'photo', 'title', 'bio', 'expertise',
                     'rating', 'experience_years', 'completed_projects', 'is_available')
            ->get()
            ->map(function ($writer) {
                $active = \App\Models\Assignment::where('tutor_id', $writer->id)
                    ->whereNotIn('status', ['completed', 'cancelled'])
                    ->count();
                $completed = \App\Models\Assignment::where('tutor_id', $writer->id)
                    ->where('status', 'completed')
                    ->count();

                return array_merge($writer->toArray(), [
                    'active_assignments' => $active,
                    'completed'          => $completed,
                ]);
            });

        return response()->json($writers);
    }

    public function showWriter(User $user)
    {
        $user->load('roles');
        return response()->json(array_merge($user->toArray(), [
            'role' => $user->getRoleNames()->first(),
        ]));
    }

    public function storeWriter(Request $request)
    {
        $request->validate([
            'name'               => 'required|string|max:255',
            'email'              => 'required|email|unique:users,email',
            'password'           => 'required|string|min:8',
            'title'              => 'nullable|string|max:255',
            'bio'                => 'nullable|string',
            'expertise'          => 'nullable|array',
            'expertise.*'        => 'string',
            'rating'             => 'nullable|numeric|min:0|max:5',
            'experience_years'   => 'nullable|integer|min:0',
            'completed_projects' => 'nullable|integer|min:0',
            'is_available'       => 'nullable|boolean',
            'photo'              => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name', 'email', 'title', 'bio', 'expertise',
                               'rating', 'experience_years', 'completed_projects', 'is_available');
        $data['password'] = Hash::make($request->password);

        if ($request->hasFile('photo')) {
            $data['photo'] = $request->file('photo')->store('writers', 'public');
        }

        $writer = User::create($data);
        $writer->assignRole('writer');

        return response()->json($writer->fresh(), 201);
    }

    public function updateWriter(Request $request, User $user)
    {
        $request->validate([
            'name'               => 'sometimes|string|max:255',
            'email'              => 'sometimes|email|unique:users,email,' . $user->id,
            'password'           => 'sometimes|nullable|string|min:8',
            'title'              => 'nullable|string|max:255',
            'bio'                => 'nullable|string',
            'expertise'          => 'nullable|array',
            'expertise.*'        => 'string',
            'rating'             => 'nullable|numeric|min:0|max:5',
            'experience_years'   => 'nullable|integer|min:0',
            'completed_projects' => 'nullable|integer|min:0',
            'is_available'       => 'nullable|boolean',
            'photo'              => 'nullable|image|max:2048',
        ]);

        $data = $request->only('name', 'email', 'title', 'bio', 'expertise',
                               'rating', 'experience_years', 'completed_projects', 'is_available');

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            if ($user->photo) {
                Storage::disk('public')->delete($user->photo);
            }
            $data['photo'] = $request->file('photo')->store('writers', 'public');
        }

        $user->update($data);

        return response()->json($user->fresh());
    }
}
