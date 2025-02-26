<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{

    use RegistersUsers;

    public function postRegisterAction(Request $request)
    {
        $nama = $request->input('nama');

        $email = $request->input('email');

        $password = $request->input('password');

        try {
             User::create([
                'nama' => $nama,
                'email' => $email,
                'password' => Hash::make($password),
            ]);
            $redirectURL = url('/login');
            return "<div class='alert alert-success'>Daftar Akun berhasil</div>
                <script>
                    setTimeout(function () {
                        location.href = '$redirectURL';
                    }, 1500);
                </script>";

        } catch (\Exception $e) {
            return "<div class='alert alert-danger'>Daftar gagal $e</div>";
        }
    }

    public function check(Request $request)
    {
        return User::where('email', $request->email)->count() > 0 ? 'Unavailable' :"Available" ;
    }
}
