<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KriditPaket;
use App\Role;

class KriditPaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kriditPaket = KriditPaket::all();
        return view('KriditPaket.index', compact('KriditPaket'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('KriditPaket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kriditPaket = new KriditPaket();
        $kriditPaket->NO_KTP = $request->NO_KTP;
        $kriditPaket->nama_KriditPaket = $request->nama_KriditPaket;
        $kriditPaket->alamat_KriditPaket = $request->alamat_KriditPaket;
        $kriditPaket->no_tlp_KriditPaket = $request->no_tlp_KriditPaket;
        $kriditPaket->harga_hp_KriditPaket = $request->hp_KriditPaket;
        //foto
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_patch() .'/assets/img/KriditPaket';
            $filename = str_random(6) .'_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $kriditPaket->foto = $filename;
        }

        $kriditPaket->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $kriditPaket->type_KriditPaket,"</b>"
        ]);
        return redirect()->route('KriditPaket.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kriditPaket = KriditPaket::findOrFail($id);
        return view('KriditPaket.show',compact('KriditPaket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kriditPaket = KriditPaket::findOrFail($id);
        return view('KriditPaket.edit',compzct('KriditPaket'));
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
        $kriditPaket = new KriditPaket();
        $kriditPaket->NO_KTP = $request->NO_KTP;
        $kriditPaket->nama_KriditPaket = $request->nama_KriditPaket;
        $kriditPaket->alamat_KriditPaket = $request->alamat_KriditPaket;
        $kriditPaket->no_tlp_KriditPaket = $request->no_tlp_KriditPaket;
        $kriditPaket->harga_hp_KriditPaket = $request->hp_KriditPaket;
        //foto
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_patch() .'/assets/img/artikel';
            $filename = str_random(6) .'_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $kriditPaket->foto = $filename;
        }

        $kriditPaket->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $kriditPaket->type_KriditPaket,"</b>"
        ]);
        return redirect()->route('KriditPaket.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kriditPaket = KriditPaket::findOrFail($id);
        if(!KriditPaket::destory($id)) return redirect()->back();
        Session::flah("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menghapus<b>"
                        . $kriditPaket->NO_KTP."</b>"
        ]);
        return redirect()->route('KriditPaket.index');
    }
}