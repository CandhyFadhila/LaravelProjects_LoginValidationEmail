<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class PasswordReset_Controller extends Controller
{
    public function index()
    {
        return view('auth.partials.forgot-password-form', [
            'halaman' => 'Forgot Passwords'
        ]);
    }

    // ? || define a route that handles the form submission request from the "forgot password" view. This route will be responsible for validating the email address and sending the password reset request to the corresponding user
    public function resetPassword(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email'
        ], [
            'email.required' => 'Email field must be filled in.',
            'email.email' => 'Correct email must use @.'
        ]);

        // TODO || Request to send link to email address
        $status = Password::sendResetLink(
            $request->only('email')
        );

        // TODO || Return message status
        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }

    // ? || define the routes necessary to actually reset the password once the user clicks on the password reset link that has been emailed to them and provides a new password.
    public function resetPasswordIndex(string $token)
    {
        return view('auth.partials.reset-password-form', [
            'halaman' => 'Reset Password',
            'token' => $token
        ]);
    }

    // ? || define a route to actually handle the password reset form submission
    public function resetPasswordForm(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ], [
            'password.required' => 'Password field must be filled in.',
            'password.min' => 'Password must be at least 8 characters.',
            'password.confirmed' => 'Password do not match and must be same.'
        ]);

        // TODO || Make update for password field in database
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        // TODO || Return message status
        return $status === Password::PASSWORD_RESET
                ? redirect()->route('login')->with('status_password_reset', __($status))
                : back()->withErrors(['email' => [__($status)]]);
    }
}
