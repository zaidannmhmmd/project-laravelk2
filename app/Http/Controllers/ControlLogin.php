<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ControlLogin extends Controller
{
    public function formLogin () {
        return view("security.login");

    }

    public function prosesLogin(Request $request) {
        if (Auth::attempt($request->only('email','password'))) {
            return redirect()->route("home");
           }
           else return redirect()->route("login")->with('gagal','Username atau Password Salah!!');

    }

    public function Logout() {
        Auth::logout();
        return redirect(route("login"));
    }
}






//if (Auth::attempt($request->only('email','password'))) {
 //   return redirect()->route("home");
//}
//else return redirect()->route("login")->with('gagal','Username atau Password Salah!!');
