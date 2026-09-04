<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
       public function showSignupForm() {

        return view('auth.signup',['pageTitle' => 'Signup']);

    }

    public function Signup(SignupRequest $request) {
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        $user->save();

        Auth::login($user);

        return redirect('/');

    }

    public function showloginForm () {

        return view('auth.login',['pageTitle' => 'Login']);

    }

    public function login(LoginRequest $request) {

        $credentails = $request->only('email','password');
        
        if (Auth::attempt($credentails)) {
            $request->session()->regenerate();

            return redirect('/');

        }

        return back()->withErors([
            'email' => 'The provided credentails do not match our records',
        ])->withInput();

    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }

}
