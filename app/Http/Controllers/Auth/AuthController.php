<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $executed = RateLimiter::attempt(
            'send-message:',
            $perMinute = 5,
            function () {},
            $decayRate = 120,
        );

        if (! $executed) {
            return 'Too many messages sent! Wait ';
        }

        $login = request()->input('login');
        $password =  request()->input('password');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        $credentials = [
            $fieldType => $login,
            'password' => $password,
        ];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $is_admin = $user->is_admin;
            if ($is_admin == 1 && Auth::user()->user_status == 1) {
                return redirect('/administration-panel/admin/dashborad');
            } else {
                Auth::logout();
                return redirect('/login_form')->withErrors('Something wrong with your account.');
            }
        } else {
            // throw new \ErrorException('Invalid Username or password!');
            // return redirect()->back()
            //         ->withErrors([
            //             'email' => 'Invalid username or pasword!',
            //         ]);
            Session::flush('errors');
            return redirect('/login_form')->withErrors('Invalid username or password!');
        }
    }
    public function logout(Request $request)
    {
        // dd('asdas');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
