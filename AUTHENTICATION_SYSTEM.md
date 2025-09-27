# Authentication System Documentation

Brief overview of the authentication system implemented in this Laravel application.

## Overview
This project uses **Laravel Breeze** for a complete authentication scaffolding with modern, clean UI components.

## Authentication Features

### 🔐 User Registration
- **Route**: `/register`
- **Controller**: `RegisteredUserController`
- **Fields**: Name, Email, Password, Password Confirmation
- **Features**: Auto-login after registration

### 🔑 User Login
- **Route**: `/login`
- **Controller**: `AuthenticatedSessionController`
- **Fields**: Email, Password, Remember Me
- **Features**: Session-based authentication, remember token

### 🔄 Password Reset
- **Forgot Password**: `/forgot-password` - Send reset link via email
- **Reset Password**: `/reset-password/{token}` - Set new password with token
- **Controller**: `PasswordResetLinkController`, `NewPasswordController`
- **Features**: Secure token-based reset, email notifications

### ✉️ Email Verification
- **Verification Prompt**: `/verify-email`
- **Verification Link**: `/verify-email/{id}/{hash}`
- **Resend**: `/email/verification-notification`
- **Features**: Signed URLs, throttled requests, automatic verification

### 👤 Profile Management
- **Route**: `/profile`
- **Controller**: `ProfileController`
- **Features**:
  - Update name and email
  - Change password
  - Delete account (with password confirmation)
  - Email re-verification when email changes

### 🚪 Logout
- **Route**: `POST /logout`
- **Features**: Session invalidation, token regeneration

## Route Protection

### Middleware Groups
```php
// Guest only (redirect if authenticated)
Route::middleware('guest')->group(function () {
    // register, login, forgot-password, reset-password
});

// Authenticated users only
Route::middleware('auth')->group(function () {
    // profile, logout, email verification
});

// Authenticated + Email verified
Route::middleware(['auth', 'verified'])->group(function () {
    // dashboard
});
```

## User Model
- **Location**: `app/Models/User.php`
- **Fields**: name, email, password, email_verified_at, remember_token
- **Features**: Password hashing, email verification timestamps
- **Traits**: HasFactory, Notifiable

## Views Structure
```
resources/views/auth/
├── login.blade.php
├── register.blade.php
├── forgot-password.blade.php
├── reset-password.blade.php
├── verify-email.blade.php
└── confirm-password.blade.php

resources/views/profile/
└── edit.blade.php
```

## Configuration
- **Session Driver**: Database
- **Password Hashing**: Bcrypt (configurable rounds)
- **Email Verification**: Available but not enforced on User model
- **Password Reset**: Token-based with email delivery

## Security Features
- CSRF protection on all forms
- Password confirmation for sensitive actions
- Signed URLs for email verification
- Rate limiting on password reset and email verification
- Secure session handling
- Password hashing with configurable rounds

## Testing Coverage
Complete test suite included:
- `AuthenticationTest.php`
- `EmailVerificationTest.php`
- `PasswordConfirmationTest.php`
- `PasswordResetTest.php`
- `PasswordUpdateTest.php`
- `RegistrationTest.php`
- `ProfileTest.php`