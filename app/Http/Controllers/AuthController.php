<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminLoginFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public  function login() {
        return view('admin.login');
    }



    public function doLogin(AdminLoginFormRequest $request) {
        $admin = Auth::attempt($request->validated());
        if($admin) {
            session()->regenerate();
            return redirect()->route('home')->with('success', 'Vous etes connecté');
        }
        return redirect()->route('admin.login')->with('error', 'Identifiant Invalid')->withInput($request->validated());

    }
}
