<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KompetensiKeahlian;
use App\BidangStudi;
use Session;

class KompetensiKeahlianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kompetensikeahlian = KompetensiKeahlian::with('bidangstudi')->get();
        $bidangstudi = BidangStudi::all();
        return view('admin.kompetensikeahlian.index', compact('kompetensikeahlian', 'bidangstudi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bidangstudi = BidangStudi::all();
        return view('admin.kompetensikeahlian.create', compact('bidangstudi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kompetensikeahlian = new KompetensiKeahlian;
        $kompetensikeahlian->bidang_id = $request->bidang_id;
        $kompetensikeahlian->kompetensi_kode = $request->kompetensi_kode;
        $kompetensikeahlian->kompetensi_nama = $request->kompetensi_nama;
        $kompetensikeahlian->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$kompetensikeahlian->kompetensi_nama</b>"
        ]);
        return redirect()->route('kompetensikeahlian.index');
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
        $kompetensikeahlian = KompetensiKeahlian::findOrFail($id);
        $bidangstudi = Bidangstudi::all();
        return view('admin.kompetensikeahlian.edit', compact('bidangstudi', 'kompetensikeahlian'));
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
        $kompetensikeahlian = KompetensiKeahlian::findOrFail($id);
        $kompetensikeahlian->id_bidangstudi = $request->id_bidangstudi;
        $kompetensikeahlian->kompetensi_kode = $request->kompetensi_kode;
        $kompetensikeahlian->kompetensi_nama = $request->kompetensi_nama;
        $kompetensikeahlian->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$kompetensikeahlian->kompetensi_nama</b>"
        ]);
        return redirect()->route('kompetensikeahlian.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kompetensikeahlian = KompetensiKeahlian::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('kompetensikeahlian.index');
    }
}
