<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BidangStudi;
use Session;

class BidangStudiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bidangstudi = BidangStudi::all();
        return view('admin.bidangstudi.index', compact('bidangstudi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bidangstudio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bidangstudi = new BidangStudi;
        $bidangstudi->bidang_kode = $request->bidang_kode;
        $bidangstudi->bidang_nama = $request->bidang_nama;
        $bidangstudi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Menyimpan <b>$bidangstudi->bidang_nama</b>"
        ]);
        return redirect()->route('bidangstudi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bidangstudi = BidangStudi::findOrFail($id);
        return view('admin.bidangstudi.edit', compact('bidangstudi'));
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
        $bidangstudi = BidangStudi::findOrFail($request->id);
        $bidangstudi->bidang_kode = $request->bidang_kode;
        $bidangstudi->bidang_nama = $request->bidang_nama;
        $bidangstudi->save();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil Mengedit <b>$bidangstudi->bidang_nama</b>"
        ]);
        return redirect()->route('bidangstudi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bidangstudi = BidangStudi::findOrFail($id)->delete();
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Data Berhasil dihapus"
        ]);
        return redirect()->route('bidangstudi.index');
    }
}
