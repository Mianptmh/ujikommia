<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pembeli;
use App\Role;

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
        //foto
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_patch() .'/assets/img/Pembeli';
            $filename = str_random(6) .'_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $Pembeli->foto = $filename;
        }

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $Pembeli->type_Pembeli,"</b>"
        ]);
        return redirect()->route('Pembeli.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('Pembeli.show',compact('pembeli'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        return view('Pembeli.edit',compzct('pembeli'));
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
        $pembeli->NO_KTP = $request->NO_KTP;
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->no_tlp_pembeli = $request->no_tlp_pembeli;
        $pembeli->harga_hp_pembeli = $request->hp_pembeli;
        //foto
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_patch() .'/assets/img/artikel';
            $filename = str_random(6) .'_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $pembeli->foto = $filename;
        }

        $pembeli->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $Pembeli->type_Pembeli,"</b>"
        ]);
        return redirect()->route('Pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = Pembeli::findOrFail($id);
        if(!Pembeli::destory($id)) return redirect()->back();
        Session::flah("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menghapus<b>"
                        . $Pembeli->NO_KTP."</b>"
        ]);
        return redirect()->route('Pembeli.index');
    }
}