<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->login)->get();
        if (count($user) > 0) {

            if (Hash::check($request->password, $user[0]->password)) {
                Auth::login($user[0]);
                return redirect()->route('home');
            }


        }

        return back()->withErrors([
            'loginError'=> "Ошибка входа, попробуйте еще!"
        ]);

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('welcome');
    }
}
