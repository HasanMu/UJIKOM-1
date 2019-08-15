<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StandarKompetensi;
use App\KompetensiKeahlian;
use Session;

class StandarKompetensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $standarkompetensi = StandarKompetensi::all();
        $kompetensikeahlian = KompetensiKeahlian::all();
        return view('admin.standarkompetensi.index', compact('kompetensikeahlian', 'standarkompetensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kompetensikeahlian = KompetensiKeahlian::all();
        return view('admin.standarkompetensi.create', compact('kompetensikeahlian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $standarkompetensi = new StandarKompetensi;
        $standarkompetensi->SK_kode = $request->SK_kode;
        $standarkompetensi->kompetensi_id = $request->kompetensi_id;
        $standarkompetensi->SK_nama = $request->SK_nama;
        $standarkompetensi->SK_kelas = $request->SK_kelas;
        $standarkompetensi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$standarkompetensi->SK_nama</b>"
        ]);
        return redirect()->route('standarkompetensi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $standarkompetensi = StandarKompetensi::findOrFail($id);
        $kompetensikeahlian = KompetensiKeahlian::all();
        return view('admin.standarkompetensi.edit', compact('kompetensikeahlian', 'standarkompetensi'));
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
        $standarkompetensi = StandarKompetensi::findOrFail($request->id);
        $standarkompetensi->SK_kode = $request->SK_kode;
        $standarkompetensi->kompetensi_id = $request->kompetensi_id;
        $standarkompetensi->SK_nama = $request->SK_nama;
        $standarkompetensi->SK_kelas = $request->SK_kelas;
        $standarkompetensi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$standarkompetensi->SK_nama</b>"
        ]);
        return redirect()->route('standarkompetensi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $standarkompetensi = StandarKompetensi::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('standarkompetensi.index');
    }
}
