<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universitas;
use Illuminate\Support\Facades\Redirect;

class ControllerUniversitas extends Controller
{

    public function index() {
        $universitas = Universitas::all();

        return view("universitas.index", ["universitas"=> $universitas]);
    }

    public function create() {
        $universitas = new Universitas();
        $method = "post";
        $action = route("universitas.store");
        return view ("universitas.create", ["universitas" => $universitas, "method" => $method, "action" => $action]);
    }

    public function store(Request $request) {
        $nama = $request->input("nama");
        $keterangan = $request->input("keterangan");

        $universitas = new Universitas();
        $universitas->nama = $nama;
        $universitas->keterangan = $keterangan;

        $universitas->save();

        return Redirect::route("universitas.index");
    }

    public function edit($id) {
        $universitas = Universitas::find($id);
        $method = "put";
        $action = route("universitas.update", ["id" => $id]);
        return view ("universitas.edit", ["universitas" => $universitas, "method" => $method, "action" => $action]);
    }

    public function update(Request $request, $id) {
        $nama = $request->input("nama");
        $keterangan = $request->input("keterangan");

        $universitas = Universitas::find($id);
        $universitas->nama = $nama;
        $universitas->keterangan = $keterangan;

        $universitas->save();

        return Redirect::route("universitas.index");
    }

    public function destroy($id){
        $Universitas = Universitas::find($id);
        $Universitas::destroy($id);

        return Redirect::route("universitas.index");
    }
}
