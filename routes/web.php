<?php

use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ControllerDosen;
use App\Http\Controllers\ControllerProject;
use App\Http\Controllers\ControllerMateri;
use App\Http\Controllers\ControllerReferensi;
use App\Http\Controllers\ControllerUniversitas;
use App\Http\Controllers\ControlLogin;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ControlLogin::class, "formLogin"])->name("login");

/// Group dari Login
Route::controller(ControlLogin::class,)->group(function () {
    Route::get("/login", "formLogin")->name("login");
    Route::post("/login", "prosesLogin")->name("login.proses");
});
Route::controller(ControllerDosen::class)->group(function () {
    Route::get("/dosen", "index")->name("dosen.index");
    Route::get("/dosen/create", "create")->name("dosen.create");
    Route::get("/dosen/{id}", "show")->name("dosen.show");
    Route::post("dosen/store", "store")->name("dosen.store");
    Route::get("dosen/{id}/edit", "edit")->name("dosen.edit");
    Route::put("dosen/{id}/update", "update")->name("dosen.update");
    Route::delete("/dosen/{id}", "destroy")->name("dosen.destroy");
});

// Ototrisasi
Route::middleware("auth")->group(function () {
    Route::get('/home', [ControllerProject::class, "home"])->name("home");
    Route::get('/account', [ControllerProject::class, "account"])->name("account");

    // Group dari materi
    Route::controller(ControllerMateri::class)->group(function () {
        Route::get("/materi", "index")->name("materi.index");
        Route::get("/materi/create", "create")->name("materi.create");
        Route::get("/materi/{id}", "show")->name("materi.show");
        Route::post("/materi", "store")->name("materi.store");
        Route::get("/materi/{id}/edit", "edit")->name("materi.edit");
        Route::put("/materi/{id}", "update")->name("materi.update");
        Route::delete("/materi/{id}", "destroy")->name("materi.destroy");
    });

    // Group dari Universitas
    Route::controller(ControllerUniversitas::class)->group(function () {
        Route::get("/universitas", "index")->name("universitas.index");
        Route::get("/universitas/create", "create")->name("universitas.create");
        Route::post("/universitas", "store")->name("universitas.store");
        Route::get("/universitas/{id}/edit", "edit")->name("universitas.edit");
        Route::put("/universitas/{id}", "update")->name("universitas.update");
        Route::delete("/universitas/{id}", "destroy")->name("universitas.destroy");
    });

    // Group dari Universitas
    Route::controller(ControllerReferensi::class)->group(function () {
        Route::get("/referensi", "index")->name("referensi.index");
        Route::get("/referensi/create", "create")->name("referensi.create");
        Route::get("/referensi/{id}", "show")->name("referensi.show");
        Route::post("/referensi", "store")->name("referensi.store");
        Route::get("/referensi/{id}/edit", "edit")->name("referensi.edit");
        Route::put("/referensi/{id}", "update")->name("referensi.update");
        Route::delete("/referensi/{id}", "destroy")->name("referensi.destroy");
    });

    Route::controller(ControlLogin::class,)->group(function () {
        Route::get("/logout", "Logout")->name("logout");
    });


});
