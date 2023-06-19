<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Materi;
use App\Models\Dosen;
use Illuminate\Database\Eloquent\save;
use App\Models\Referensi;
use App\Models\Referensi_materi;

use Illuminate\Support\Facades\Redirect;

class ControllerMateri extends Controller
{

    public function index() {
        $materi = Materi::all();

        return view("materi.index", ['materi' => $materi]);
    }

    public function show($id) {
        $materi = Materi::find($id);

        return view("materi.show", ["materi" => $materi]);
    }
    public function create() {
        $materi = new Materi();
        $data_dosen = Dosen::get();
        $data_referensi = Referensi::get();

        $method = "post";
        $action = route("materi.store");
        return view ("materi.create", [
            "materi" => $materi,
            "method" => $method,
            "action" => $action,
            "data_dosen" => $data_dosen,
            "data_referensi" => $data_referensi,
        ]);
    }

    public function store(Request $request) {
        $tema = $request->input("tema");
        $penjelasan = $request->input("penjelasan");
        $kurikulum = $request->input("kurikulum");
        $dosen_id = $request->input("dosen_id");

        $referensi_id = $request->input("referensi_id");

        $materi = new Materi();
        $materi->tema = $tema;
        $materi->penjelasan = $penjelasan;
        $materi->kurikulum = $kurikulum;
        $materi->dosen_id = $dosen_id;
        $materi->save();

        $materi->referensi()->sync($referensi_id);

        return Redirect::route("materi.index");
    }

    public function edit($id) {
        $materi = Materi::find($id);
        $data_dosen = Dosen::get();
        $data_referensi = Referensi::get();

        $method = "put";
        $action = route("materi.update", ["id" => $id]);
        return view ("materi.edit", ["materi" => $materi, "method" => $method, "action" => $action, "data_dosen" => $data_dosen,"data_referensi" => $data_referensi,]);
    }

    public function update(Request $request, $id) {
        $tema = $request->input("tema");
        $penjelasan = $request->input("penjelasan");
        $kurikulum = $request->input("kurikulum");
        $dosen_id = $request->input("dosen_id");

        $referensi_id = $request->input("referensi_id");

        $materi = Materi::find($id);
        $materi->tema = $tema;
        $materi->penjelasan = $penjelasan;
        $materi->kurikulum = $kurikulum;
        $materi->dosen_id = $dosen_id;
        $materi->save();

        $materi->referensi()->sync($referensi_id);

        return Redirect::route("materi.index");

    }

    public function destroy($id){
        $materi = Materi::find($id);
        $materi->referensi()->sync(array());

        $materi::destroy($id);

        return Redirect::route("materi.index");

    }
}
