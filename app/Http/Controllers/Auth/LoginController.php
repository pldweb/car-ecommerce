<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function postLogin(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        $pesan = [];
        if (empty($email)) {
            $pesan['email'] = 'Email tidak boleh kosong';
        }

        if (empty($password)) {
            $pesan['password'] = 'Password tidak boleh kosong';
        }

        if (!empty($pesan)) {
            return view('auth.login', ['errors' => $pesan]);
        }

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect('/dashboard');
        }

        return view('auth.login', ['errors' => ['email' => 'Email atau password salah']]);
    }

}
