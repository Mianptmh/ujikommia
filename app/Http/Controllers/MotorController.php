<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;
use App\Role;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motor = Motor::all();
        return view('Motor.index', compact('motor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Motor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $motor = new Motor();
        $motor->kode_motor = $request->kode_motor;
        $motor->merk_motor = $request->merk_motor;
        $motor->type_motor = $request->type_motor;
        $motor->warna_motor = $request->warna_motor;
        $motor->harga_motor = $request->harga_motor;
        //foto
        if($request->hasFile('gambar_motor')) {
            $file = $request->file('gambar_motor');
            $path = public_patch() .'/assets/img/motor';
            $filename = str_random(6) .'_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $motor->gambar_motor = $filename;
        }
        $motor->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $motor->type_motor,"</b>"
        ]);
        return redirect()->route('motor.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFail($id);
        return view('amotor.show',compact('motor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = Motor::findOrFail($id);
        return view('Motor.edit',compzct('motor'));
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
        $motor = new Motor();
        $motor->kode_motor = $request->kode_motor;
        $motor->merk_motor = $request->merk_motor;
        $motor->type_motor = $request->type_motor;
        $motor->warna_motor = $request->warna_motor;
        $motor->harga_motor = $request->harga_motor;
        //foto
        if($request->hasFile('foto')) {
            $file = $request->file('foto');
            $path = public_patch() .'/assets/img/artikel';
            $filename = str_random(6) .'_'
            . $file->getClientOriginalName();
            $upload = $file->move(
                $path,$filename
            );
            $motor->foto = $filename;
        }

        $motor->save();
        Session::flash("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menyimpan<b>"
                        . $motor->type_motor,"</b>"
        ]);
        return redirect()->route('motor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::findOrFail($id);
        if(!Motor::destory($id)) return redirect()->back();
        Session::flah("flash_notification",[
            "level" => "Succes",
            "message" => "Berhasil Menghapus<b>"
                        . $motor->type_motor."</b>"
        ]);
        return redirect()->route('motor.index');
    }
}