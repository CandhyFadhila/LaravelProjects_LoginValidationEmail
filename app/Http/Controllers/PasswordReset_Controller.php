<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Password;

class PasswordReset_Controller extends Controller
{
    public function index()
    {
        return view('auth.partials.forgot-password', [
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
    public function resetPasswordForm(string $token){
        return view('auth.partials.reset-password-form', [
            'halaman' => 'Reset Password',
            'token' => $token
        ]);
    }
}
