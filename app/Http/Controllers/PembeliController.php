<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.pembeli.create');
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
        $pembeli->pembeli_no_ktp = $request->pembeli_no_ktp;
        $pembeli->pembeli_nama = $request->pembeli_nama;
        $pembeli->pembeli_alamat = $request->pembeli_alamat;
        $pembeli->pembeli_telepon = $request->pembeli_telepon;
        $pembeli->pembeli_HP = $request->pembeli_HP;

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil Di Edit <b>"
                         . $pembeli->pembeli_nama."</b>"
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
        $pembeli->pembeli_nama = $request->pembeli_nama;
        $pembeli->pembeli_alamat = $request->pembeli_alamat;
        $pembeli->pembeli_telepon = $request->pembeli_telepon;
        $pembeli->pembeli_HP = $request->pembeli_HP;

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "success",
            "message" => "Berhasil Di <b>"
                         . $pembeli->pembeli_nama."</b>"
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
