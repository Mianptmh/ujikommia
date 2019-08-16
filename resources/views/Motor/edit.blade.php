@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data</div>
                    <div class="card-body">
                        <form action="{{ route('motor.update',$motor->id) }}"method="post">
                            <input name="_method" type="hidden" value="PATCH">
                            {{ csrf_field() }}
    <div class="form-group">
        <label for="">Kode Motor</label>
        <input class="form-control" value="{{ $motor->Kode_motor}}" type="text" name="kode_motor">
    </div>
    <div class="form-group">
        <label for="">Merk Motor</label>
        <input class="form-control" value="{{ $motor->merk_motor}}" type="text" name="merk_motor">
    </div>
    <div class="form-group">
        <label for="">Type Motor</label>
        <input class="form-control" value="{{ $motor->type_motor}}" type="text" name="type_motor">
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
        <label for="">Gambar Motor</label>
        <input class="form-control" value="{{ $motor->gambar_motor}}" type="text" name="gambar_motor">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
    <div class="form-group">
        <a href="{{ iurl('motor.index') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
</section>
@endsection