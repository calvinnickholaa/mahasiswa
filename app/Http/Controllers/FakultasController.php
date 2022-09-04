<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function indexs()
    {
        $fakultas = Fakultas::paginate();
        return view("fakultass.indexs", compact("fakultas"));
    }

    public function creates()
    {
        return view("fakultass.creates");
    }

    public function stores(Request $request)
    {
        $fakultas = Fakultas::create([
            "name" => $request->name,
            "deskripsi" => $request->deskripsi
        ]);

        return redirect("/fak");
    }

    public function edits($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        
        return view("fakultass.edits", compact("fakultas"));
    }

    public function update(Request $request, $id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas -> update([
            "name" => $request->name?? $fakultas->name,
            "deskripsi" => $request->deskripsi?? $fakultas->deskripsi,
        ]);
        return redirect("/fak");
    }

    public function destroy($id)
    {
        $fakultas = Fakultas::findOrFail($id);
        $fakultas->delete();

        return redirect("/fak");
    }
}
