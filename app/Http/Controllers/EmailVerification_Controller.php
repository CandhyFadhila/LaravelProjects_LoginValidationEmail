<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailVerification_Controller extends Controller
{
    // public function index(){
    //     return view('auth.partials.emailVerif', [
    //         "halaman" => 'Email Verification',
    //     ]);
    // }

    public function notice()
    {
        // return redirect('session_users')->with('error_verifcation', 'silahkan verifikasi email');
        return view('auth.partials.emailVerif', [
            "halaman" => 'Email Verification',
        ]);
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();
        return redirect('session_users')->with('udah_verif', 'Thank you for your registering. Please log in.');
    }

    public function resendEmailVerif(Request $request)
    {
        try {
            $request->user()->sendEmailVerificationNotification();

            return redirect('/email/verify')->with('berhasil_kirim', 'Thank you for your registering. Please log in.');

        } catch (\Exception $e) {
            return redirect('/email/verify')->with('gagal_kirim', 'Thank you for your registering. Please log in.');
        }
    }
}
