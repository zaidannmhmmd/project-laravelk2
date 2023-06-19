<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\Materi;
use App\Models\Referensi;
use App\Models\Universitas;
use App\Models\User;
class ControllerProject extends Controller
{
   function home() {
    return view('home');
   }

   function materi() {
    $materi = materi::all();
    $referensi = referensi::all();
    $dosen = dosen::all();

    return view('\materi\index',[
        "materi" => $materi,
        "referensi" => $referensi,
        "dosen" => $dosen,
    ]);
   }

   function login() {
    return view("login");
   }

   function referensi() {
    return view('\referensi\index');
   }

   function account() {
    $dosen = dosen::all();
    $universitas = universitas::all();
    $user = user::all();

    return view('user.index', [
        'dosen' => $dosen,
        'universitas' => $universitas,
        'user' => $user,
    ]);
    }

    function universitas() {
        return view('\referensi\index');
    }
}
