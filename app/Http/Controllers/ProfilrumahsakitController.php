<?php

namespace App\Http\Controllers;

use App\Models\ProfilrumahsakitM;
use Illuminate\Http\Request;

class ProfilrumahsakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profilrumahsakit = ProfilrumahsakitM::all();
        return view('pages.rumahsakit.index', compact('profilrumahsakit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $profilrumahsakit= new ProfilrumahsakitM();

        return view('pages.rumahsakit.create', compact('profilrumahsakit'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profilrumahsakit = new ProfilrumahsakitM();
        $profilrumahsakit->nama_rumahsakit  = $request->nama_rumahsakit;
        $profilrumahsakit->alamat_rumahsakit= $request->alamat_rumahsakit;
        $profilrumahsakit->email_rumahsakit = $request->email_rumahsakit;
        $profilrumahsakit->nomor_telp_rumahsakit = $request->nomor_telp_rumahsakit;
        $profilrumahsakit->save();

        return redirect('profilrumahsakit')->with('success', 'Data Pasien Berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profilrumahsakit = ProfilrumahsakitM::find($id);
        return view('pages.rumahsakit.show', compact('profilrumahsakit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $profilrumahsakit = ProfilrumahsakitM::find($id);

        return view('pages.rumahsakit.edit', compact('profilrumahsakit'));
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
        $profilrumahsakit = ProfilrumahsakitM::find($id);
        $profilrumahsakit->nama_rumahsakit  = $request->nama_rumahsakit;
        $profilrumahsakit->alamat_rumahsakit= $request->alamat_rumahsakit;
        $profilrumahsakit->email_rumahsakit = $request->email_rumahsakit;
        $profilrumahsakit->nomor_telp_rumahsakit = $request->nomor_telp_rumahsakit;
        $profilrumahsakit->save();

        return redirect('profilrumahsakit')->with('success', 'Data Pasien Berhasil diupdate');
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
            $rumahSakit = ProfilrumahsakitM::findOrFail($id);
            $rumahSakit->delete();
    
            return response()->json(['message' => 'Data berhasil dihapus'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Terjadi kesalahan saat menghapus data'], 500);
        }
    }
}
