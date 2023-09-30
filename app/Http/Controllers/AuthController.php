<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Traits\HasRoles;
use Str;

class AuthController extends Controller
{

    function login()
    {
        if (!empty(Auth::check())) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->user_type == 2) {
                return redirect('magasinier/dashboard');
            } else if (Auth::user()->user_type == 3) {
                return redirect('gestionnaire/dashboard');
            } else if (Auth::user()->user_type == 4) {
                return redirect('operateur/dashboard');
            } else if (Auth::user()->user_type == 5) {
                return redirect('invite/dashboard');
            }
        }
        return view('auth.login');
    }

    function AuthLogin(Request $request)
    {
        $remember = !empty($request->remember) ? true : false;

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember)) {
            if (Auth::user()->user_type == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->user_type == 2) {
                return redirect('magasinier/dashboard');
            } else if (Auth::user()->user_type == 3) {
                return redirect('gestionnaire/dashboard');
            } else if (Auth::user()->user_type == 4) {
                return redirect('operateur/dashboard');
            } else if (Auth::user()->user_type == 5) {
                return redirect('invite/dashboard');
            }
        } else {
            return redirect()->back()->with('error', 'Veuillez entrer une adresse email ou un mot de passe correct!');
        }
    }

    function ForgotPassword()
    {
        return view('auth.forgotpassword');
    }
    function PostForgotPassword(Request $request)
    {
        $user = User::getEmailSingle($request->email);
        if (!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->save();
            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            return redirect()->back()->with('success', "Please check your email and reset your password!");
        } else {
            return redirect()->back()->with('error', "Email not found in the System.");
        }

        // return view('auth.forgotpassword');
    }

    function ResetPassword($remember_token)
    {
        $user = User::getTokenSingle($remember_token);
        if (!empty($user)) {
            $data['user'] = $user;
            return view('auth.resetpassword', $data);
        } else {
            // abort(404);
        }
    }

    function PostResetPassword($remember_token, Request $request)
    {
        if ($request->password === $request->cpassword) {
            $user = User::getTokenSingle($remember_token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();
            return redirect('/')->with('success', "Password successfully reset!");

        } else {
            return redirect()->back()->with('error', "Password and confirm password does not match!");
        }
    }
    function AuthLogout()
    {
        Auth::logout();
        return redirect('');
    }

    function PostPasswordUser(Request $request)
    {
        dd($request->input());
        $user = User::getTokenSingle($request->token);
        if (!empty($user)) {
            $user->remember_token = Str::random(30);
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('success', "Mot de passe mise à jour!");
        } else {
            return redirect()->back()->with('error', "");
        }

        // return view('auth.forgotpassword');
    }
}
