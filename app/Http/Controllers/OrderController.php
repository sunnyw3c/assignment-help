<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\User;
use App\Services\OrderSubmissionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class OrderController extends Controller
{
    public function create()
    {
        return view('order.create');
    }

    public function store(Request $request, OrderSubmissionService $orders)
    {
        $validated = $request->validate([
            'email' => [
                Rule::requiredIf(! auth()->check()),
                'nullable',
                'string',
                'email',
                'max:255',
            ],
            'country_code' => 'nullable|string|max:20',
            'phone' => 'nullable|string|max:30',
            'subject' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'deadline' => 'required|date',
            'pages' => 'required|integer|min:1',
            'file' => 'nullable|file|mimes:pdf,doc,docx,zip',
            'files.*' => 'nullable|file|mimes:pdf,doc,docx,zip',
            'description' => 'nullable|string',
            'budget' => 'nullable|numeric',
            'service_type' => 'nullable|string|max:255',
            'service_id' => 'nullable|integer',
            'academic_level' => 'nullable|string|max:255',
            'word_count' => 'nullable|integer|min:1',
            'difficulty' => 'nullable|string|max:255',
            'assignment_type' => 'nullable|string|max:255',
            'specific_requirements' => 'nullable|string',
        ]);

        if (auth()->check()) {
            $assignment = $orders->createAssignment($validated, auth()->id());
            $orders->attachUploadedFiles($request, $assignment);

            return $this->orderSubmittedResponse($request, $assignment);
        }

        $email = Str::lower($validated['email']);
        $existingUser = User::where('email', $email)->first();

        if ($existingUser) {
            $request->session()->put(
                OrderSubmissionService::PENDING_ORDER_SESSION_KEY,
                $orders->createPendingPayload($validated, $request, $email)
            );

            if ($request->expectsJson()) {
                return response()->json([
                    'redirect' => route('login'),
                    'message' => 'Please log in to continue your order.',
                ], 401);
            }

            return redirect()->route('login')
                ->with('status', 'Please log in to continue your order.')
                ->withInput(['email' => $email]);
        }

        $user = $this->createUserFromOrderEmail($email);
        Auth::login($user);
        $request->session()->regenerate();

        $assignment = $orders->createAssignment($validated, $user->id);
        $orders->attachUploadedFiles($request, $assignment);

        return $this->orderSubmittedResponse($request, $assignment, 'Assignment request submitted successfully! Your account has been created and you are logged in.');
    }

    public function success(Assignment $assignment)
    {
        // Ensure user can only see their own success page
        if ($assignment->user_id !== auth()->id()) {
            abort(403);
        }

        return view('order-success', compact('assignment'));
    }

    private function createUserFromOrderEmail(string $email): User
    {
        $user = User::create([
            'name' => (string) Str::of($email)->before('@')->replace(['.', '_', '-'], ' ')->title(),
            'email' => $email,
            'password' => Hash::make(Str::random(32)),
        ]);

        if (class_exists(Role::class) && Role::where('name', 'student')->exists()) {
            $user->assignRole('student');
        }

        return $user;
    }

    private function orderSubmittedResponse(Request $request, Assignment $assignment, string $message = 'Assignment request submitted successfully!')
    {
        if ($request->expectsJson()) {
            return response()->json([
                'redirect' => route('dashboard.details', $assignment->order_number),
                'order_number' => $assignment->order_number,
                'message' => $message,
            ]);
        }

        return redirect()->route('dashboard.details', $assignment->order_number)
            ->with('success', $message);
    }
}
