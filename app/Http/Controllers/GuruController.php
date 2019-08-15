<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;
use App\KompetensiKeahlian;
use Session;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guru = Guru::all();
        $kompetensikeahlian = KompetensiKeahlian::all();
        return view('admin.guru.index', compact('kompetensikeahlian', 'guru'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kompetensikeahlian = KompetensiKeahlian::all();
        return view('admin.guru.create', compact('kompetensikeahlian'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guru = new Guru;
        $guru->guru_kode = $request->guru_kode;
        $guru->kompetensi_id = $request->kompetensi_id;
        $guru->guru_NIP = $request->guru_NIP;
        $guru->guru_nama = $request->guru_nama;
        $guru->guru_alamat = $request->guru_alamat;
        $guru->guru_telpon = $request->guru_telpon;
        $guru->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$guru->guru_nama</b>"
        ]);
        return redirect()->route('guru.index');
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
        $guru = Guru::findOrFail($id);
        $kompetensikeahlian = KompetensiKeahlian::all();
        return view('admin.guru.edit', compact('kompetensikeahlian', 'guru'));
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
        $guru = Guru::findOrFail($request->id);
        $guru->guru_kode = $request->guru_kode;
        $guru->kompetensi_id = $request->kompetensi_id;
        $guru->guru_NIP = $request->guru_NIP;
        $guru->guru_nama = $request->guru_nama;
        $guru->guru_alamat = $request->guru_alamat;
        $guru->guru_telpon = $request->guru_telpon;
        $guru->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$guru->guru_nama</b>"
        ]);
        return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $guru = Guru::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menghapus data"
        ]);
        return redirect()->route('guru.index');
    }
}
