<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogoutController extends Controller
{

    use AuthenticatesUsers;

    public function postLogoutAction(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        if($request->ajax()){
            $redirectURL = url('/login');
            return "<div class='alert alert-success'>Logout Akun berhasil</div>
                <script>
                    setTimeout(function () {
                        location.href = '$redirectURL';
                    }, 1500);
                </script>";
        }

        return "<div class='alert alert-danger'>Logout Akun gagal</div>";
    }

}
