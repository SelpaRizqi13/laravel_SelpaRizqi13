<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PasienM;
use App\Models\ProfilrumahsakitM;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pasien = PasienM::all();
        return view('pages.data-pasien.index', compact('pasien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pasien= new PasienM();
        $profilrumahsakit = ProfilrumahsakitM::all();

        return view('pages.data-pasien.create', compact('pasien', 'profilrumahsakit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pasien = new PasienM();
        $pasien->nama_pasien  = $request->nama_pasien;
        $pasien->alamat_pasien= $request->alamat_pasien;
        $pasien->no_telp_pasien = $request->no_telp_pasien;
        $pasien->profilrumahsakit_id = $request->profilrumahsakit_id;
        $pasien->save();

        return redirect('pasien')->with('success', 'Data Pasien Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pasien = PasienM::find($id);
        return view('pages.data-pasien.show', compact('pasien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = PasienM::find($id);
        $profilrumahsakit = ProfilrumahsakitM::all();

        return view('pages.data-pasien.edit', compact('pasien', 'profilrumahsakit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pasien = PasienM::find($id);
        $pasien->nama_pasien  = $request->nama_pasien;
        $pasien->alamat_pasien= $request->alamat_pasien;
        $pasien->no_telp_pasien = $request->no_telp_pasien;
        $pasien->profilrumahsakit_id = $request->profilrumahsakit_id;
        $pasien->save();

        return redirect('pasien')->with('success', 'Data Pasien Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $pasien = PasienM::findOrFail($id);
            $pasien->delete();
    
            return response()->json(['message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data'], 500);
        }
    }

    public function filterRumahSakit(Request $request)
    {
        $query = $request->input('query');

        // Ambil data berdasarkan filter
        $rumahSakit = ProfilrumahsakitM::where('nama_rumahsakit', 'LIKE', '%' . $query . '%')->get();

        // Return data sebagai JSON
        return response()->json($rumahSakit);
    }
}
