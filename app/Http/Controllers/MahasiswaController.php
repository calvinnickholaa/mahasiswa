<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Fakultas;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mahasiswas = mahasiswa::paginate(1);
        // Inner Join
        $mahasiswas = DB::table("mahasiswas")
        ->join("fakultas", "mahasiswas.fakultas_id", "=", "fakultas.id")
        ->select("mahasiswas.*", "fakultas.name as nama")
        ->paginate();
        return view("table", compact("mahasiswas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fakultas=Fakultas::get();
        return view("create", compact("fakultas"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mahasiswas = mahasiswa::create([
            "name"=>$request->name,
            "nim"=>$request->nim,
            "angkatan"=>$request->angkatan,
            "tanggal_lahir"=>$request->tanggal_lahir,
            "rombel"=>$request->rombel,
        ]);

        return redirect("/");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $fakultas = Fakultas::get();

        return view("edit", compact("mahasiswa", "fakultas"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update([
            "name" => $request->name ?? $mahasiswa->name,
            "nim" => $request->nim?? $mahasiswa->nim,
            "angkatan" => $request->angkatan?? $mahasiswa->angkatan,
            "tanggal_lahir" => $request->tanggal_lahir?? $mahasiswa->tanggal_lahir,
            "rombel" => $request->rombel?? $mahasiswa->rombel,
        ]);

        return redirect("/");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect("/");
    }
}
