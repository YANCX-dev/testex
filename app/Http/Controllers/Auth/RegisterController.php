<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    public function register(Request $request)
    {


        $existUser = User::all()->where('name', $request->userName)
            ->where('surname', $request->userSurname)
            ->where('email', $request->userEmail);

        if (count($existUser) > 0) {
            return back()->withErrors([
                'registerError' => "Пользователь уже существует!"
            ]);
        }

        if($request->password === $request->repeatPassword){
            $user = User::create([
                'name' => $request->userName,
                'surname' => $request->userSurname,
                'birthDate' => $request->userBirthDate,
                'email' => $request->userEmail,
                'password' => Hash::make($request->password),
            ]);
            Auth::login($user);

            return redirect()->route('home');
        }else{
            return back()->withErrors([
                'registerError' => "Пользователь уже существует!"
            ]);
        }


    }
}
