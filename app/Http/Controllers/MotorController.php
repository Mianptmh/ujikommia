<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Motor;

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
        $motor->name = $request->name;
        $motor->email = $request->email;
        $motor->password = bcrypt($request->password);
        $motor->save;
        $role = Role::where('name','superadmin')->first();
        $motor->attachRole($role);
        return response()->json('berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $motor = Motor::findOrFaill($id);
        $response =[
            'suscces'=>true,
            'data'=>$motor,
            'massage'=>'berhasil'
        ];
        return response()->json($response,200); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motor = $Motor::findOrFaill($id);
        $response =[
            'suscces'=>true,
            'data'=>$motor,
            'massage'=>'berhasil'
        ];
        return response()->json($response,200); 
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
        $motor = Motor::findOrFaill($id);
        $motor->name = $request->name;
        $motor->email = $request->email;
        $motor->password = bcrypt($request->password);
        $motor->save;
        $role = Role::where('name','superadmin')->first();
        $motor->attachRole($role);
        return response()->json('berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $motor = Motor::findOrfail($id)->delete();
        //Session::flash("flash_notification",[
            // "level" => "Success",
            // "message" => "Berhasil menghapus<b>"
             //             . $motor->nama_motor."</b>"
        // ]);
        return redirect()->route('motor.index');

    }
}