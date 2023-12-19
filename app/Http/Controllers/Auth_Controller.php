<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Session;

class Auth_Controller extends Controller
{
    public function login_index()
    {
        return view('auth.partials.login', [
            "halaman" => 'Login Page'
        ]);
    }

    public function login_code(Request $request)
    {
        Session::flash('email', $request->email);
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4'
        ], [
            'email.required' => 'Email field must be filled in.',
            'email.email' => 'Correct email must use @.',

            'password.required' => 'Password field cannot be empty.',
            'password.min' => 'Password must be at least 4 characters.',
        ]);

        $info_login = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($info_login)) {
            return redirect('dashboard')->with('success', 'Selamat Datang, "' . Auth::user()->name . '" di Halaman Dashboard');
        } else {
            return redirect('session_users')->with('error_password', 'Login gagal, Password atau Email yang anda masukkan salah.');
        }
    }

    public function registrasi()
    {
        return view('auth.partials.registrasi', [
            "halaman" => 'Registrasi Page'
        ]);
    }

    public function registrasi_code(Request $request)
    {
        Session::flash('nik', $request->nik);
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'nik' => 'required|numeric|min:16|max:40000000000000000|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5'
        ], [
            'nik.required' => 'NIK field cannot be empty.',
            'nik.numeric' => 'NIK is required to use numbers.',
            'nik.min' => 'NIK length allowed is only 16 digits.',
            'nik.unique' => 'The NIK has already been registered.',

            'name.required' => 'Email field must be filled in.',

            'email.required' => 'Email must not be empty.',
            'email.email' => 'Correct Email must use @.',
            'email.unique' => 'The Email has already been registered.',

            'password.required' => 'Password must not be empty.',
            'password.min' => 'Minimum password allowed 5 characters.'
        ]);

        $data_register = [
            'nik' => $request->nik,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ];

        // return $data_register;

        // ! EMAIL VERIFICATION
        $user = User::create($data_register);

        event(new Registered($user));

        auth()->login($user);

        return redirect('session_users/registrasi')->with('success_register', 'silahkan verifikasi email');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('session_users')->with('success', 'You are successfully Logged Out');
    }
}
