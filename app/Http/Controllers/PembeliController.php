<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli = Pembeli::all();
        return view('Pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new Pembeli();
        $pembeli->NO_KTP = $request->NO_KTP;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->no_tlp_pembeli = $request->no_tlp_pembeli;
        $pembeli->hp_pembeli = $request->hp_pembeli;

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil Di Edit <b>"
                         . $pembeli->nama_pembeli."</b>"
        ]);
        return redirect()->route('pembeli.index');
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
        //
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
        $pembeli = new Pembeli();
        $pembeli->pembeli_no_ktp = $request->pembeli_no_ktp;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->no_tlp_pembeli = $request->no_tlp_pembeli;
        $pembeli->hp_pembeli = $request->hp_pembeli;

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil Di <b>"
                         . $pembeli->nama_pembeli."</b>"
        ]);
        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrfail($id)->delete();
        //Session::flash("flash_notification",[
            // "level" => "Success",
            // "message" => "Berhasil menghapus<b>"
             //             . pembeli->nama_pembeli."</b>"
        // ]);
        return redirect()->route('pembeli.index');

    }
}
