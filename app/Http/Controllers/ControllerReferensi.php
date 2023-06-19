<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Referensi;
use App\Models\Materi;
use Illuminate\Support\Facades\Redirect;

class ControllerReferensi extends Controller
{
    public function index() {
        $referensi = Referensi::all();

        return view("referensi.index", ['referensi' => $referensi]);
    }

    public function show($id) {
        $referensi = Referensi::find($id);

        return view("referensi.show", ["referensi" => $referensi]);
    }
    public function create() {
        $referensi = new Referensi();
        $data_materi = Materi::get();

        $method = "post";
        $action = route("referensi.store");
        return view ("referensi.create", [
            "referensi" => $referensi,
            "method" => $method,
            "action" => $action,
            "data_materi" => $data_materi]);
    }

    public function store(Request $request) {
        $judul = $request->input("judul");
        $issn = $request->input("issn");
        $abstrak = $request->input("abstrak");
        $tahun = $request->input("Tahun");

        $materi_id = $request->input("materi_id");

        $referensi = new Referensi();
        $referensi->judul = $judul;
        $referensi->issn = $issn;
        $referensi->abstrak = $abstrak;
        $referensi->tahun = $tahun;
        $referensi->save();

        $referensi->materi()->sync($materi_id);

        return Redirect::route("referensi.index");
    }

    public function edit($id) {
        $referensi = Referensi::find($id);
        $data_materi = Materi::get();
        $method = "put";
        $action = route("referensi.update", ["id" => $id]);
        return view ("referensi.edit", ["referensi" => $referensi, "method" => $method, "action" => $action,"data_materi" => $data_materi]);
    }

    public function update(Request $request, $id) {
        $judul = $request->input("judul");
        $issn = $request->input("issn");
        $abstrak = $request->input("abstrak");
        $tahun = $request->input("Tahun");

        $materi_id = $request->input("materi_id");

        $referensi = Referensi::find($id);
        $referensi->judul = $judul;
        $referensi->issn = $issn;
        $referensi->abstrak = $abstrak;
        $referensi->tahun = $tahun;
        $referensi->save();

        $referensi->materi()->sync($materi_id);

        return Redirect::route("referensi.index");
    }
    public function destroy($id){
        $referensi = Referensi::find($id);
        $referensi->materi()->sync(array());

        $referensi::destroy($id);

        return Redirect::route("referensi.index");

    }
}
