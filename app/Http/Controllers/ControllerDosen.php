<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use App\Models\User;
use App\Models\Universitas;
use App\Http\Requests\DosenRequest;
use Illuminate\Support\Facades\Redirect;

class ControllerDosen extends Controller
{
    function login() {
        return view("dosen.login");
       }
    public function index() {
        $dosen = Dosen::all();

        return view("dosen.index", ['dosen' => $dosen]);
    }

    public function create() {
        $dosen = new Dosen();
        $user = new User();
        $data_universitas = Universitas::get();

        $method = "post";
        $action = route("dosen.store");
        return view ("dosen.create", [
            "dosen" => $dosen,
            "user" => $user,
            "method" => $method,
            "action" => $action,
            "data_universitas" => $data_universitas,
        ]);
    }

    public function store(DosenRequest $request) {
        // table User
        $name = $request->input("name");
        $level = $request->input("level");
        $email = $request->input("email");
        $password = $request->input("password");

        // table Dosen
        $nidn = $request->input("nidn");
        $nama = $request->input("nama");
        $tmp_lahir = $request->input("tmp_lahir");
        $tgl_lahir = $request->input("tgl_lahir");
        $jabatan = $request->input("jabatan");
        $universitas_id = $request->input("universitas_id");

        $dosen = new Dosen();
        $dosen->nidn = $nidn;
        $dosen->nama = $nama;
        $dosen->tmp_lahir = $tmp_lahir;
        $dosen->tgl_lahir = $tgl_lahir;
        $dosen->jabatan = $jabatan;
        $dosen->universitas_id = $universitas_id;
        $dosen->save();

        $user = new User();
        $user->name = $name;
        $user->level = $level;
        $user->email = $email;
        $user->password = $password;
        $user->dosen_id = $dosen->id;
        $user->save();

        return Redirect::route("login");
    }

    public function edit($id) {
        $dosen = Dosen::find($id);
        $method = "put";
        $action = route("dosen.update", ["id" => $id]);
        return view ("dosen.edit", ["dosen" => $dosen, "method" => $method, "action" => $action]);
    }

    public function update(DosenRequest $request, $id) {
        $nidn = $request->input("nidn");
        $nama = $request->input("nama");
        $tmp_lahir = $request->input("tmp_lahir");
        $tgl_lahir = $request->input("tgl_lahir");
        $jabatan = $request->input("jabatan");
        $universitas_id = $request->input("universitas_id");

        $dosen = Dosen::find($id);
        $dosen->nidn = $nidn;
        $dosen->nama = $nama;
        $dosen->tmp_lahir = $tmp_lahir;
        $dosen->tgl_lahir = $tgl_lahir;
        $dosen->jabatan = $jabatan;
        $dosen->universitas_id = $universitas_id;

        $dosen->save();

        return Redirect::route("dosen.index");
    }

    public function destroy($id){
        $dosen = Dosen::find($id);
        $user = $dosen->users;
        User::destroy(($user->id));

        $dosen::destroy($id);

        return Redirect::route("dosen.index");
    }
}
