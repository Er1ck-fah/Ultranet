<?php

namespace App\Http\Controllers;

use App\Models\Modules;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    function Dashboard()
    {

        $module = Modules::all();
        if (Auth::user()->user_type == 1) {
            return view('admin.dashboard',['modules'=>$module]);
        } else if (Auth::user()->user_type == 2) {
            return view('magasinier.dashboard',['modules'=>$module]);
        } else if (Auth::user()->user_type == 3) {
            return view('gestionnaire.dashboard',['modules'=>$module]);
        } else if (Auth::user()->user_type == 4) {
            return view('operateur.dashboard',['modules'=>$module]);
        } else if (Auth::user()->user_type == 5) {
            return view('invite.dashboard',['modules'=>$module]);
        }
    }

    function ProfileUser()
    {
        return view('communs.profile');
    }
    function PasswordUser()
    { 
            return view('communs.password');
    }
    
}
