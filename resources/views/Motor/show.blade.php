@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menampilkan Data</div>
                <div class="card-body">
    <div class="form-group">
        <label for="">Kode Motor</div>
        <input clas="form-control" value="{{ $motor->kode_motor}}" type="text" name="kode_motor" disabled>
    </div>
    <div class="form-group">
        <label for="">Type Mptor</div>
        <input clas="form-control" value="{{ $motor->type_motor}}" type="text" name="type_motor" disabled>
    </div>
    <div class="form-group">
        <label for="">Warna Motor</label>
        <input class="form-control" value="{{ $motor->warna_motor}}" type="text" name="warna_motor">
    </div>
    <div class="form-group">
        <label for="">Harga Motor</label>
        <input class="form-control" value="{{ $motor->harga_motor}}" type="text" name="harga_motor">
    </div>
    <div class="form-group">
        <label for="">Foto</label></br>
        <img src="{{asset('assets/img/artikel/' $artikel->gambar_motor)}}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="gambar_motor" disabled>
    </div>
    <div class="form-group">
        <a href="{{ url('artikel')}}" class="btn btn-outline-info">Kembali</a>
    </div>
        </div>
            </div>
                </div>
                    </div>
                        </div>
                            @endsection