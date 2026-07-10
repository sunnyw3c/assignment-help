<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Services\OrderSubmissionService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request, OrderSubmissionService $orders): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        $pendingOrder = $request->session()->pull(OrderSubmissionService::PENDING_ORDER_SESSION_KEY);

        if ($pendingOrder) {
            $assignment = $orders->createFromPendingPayload($pendingOrder, $request->user());

            if ($assignment) {
                return redirect()->route('dashboard.details', $assignment->order_number)
                    ->with('success', 'Assignment request submitted successfully!');
            }

            return redirect()->intended(route('dashboard', absolute: false))
                ->with('status', 'The pending order email did not match the logged-in account.');
        }

        return redirect()->intended(route('dashboard', absolute: false));
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
