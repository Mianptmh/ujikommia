@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <center>
                    <div class="card-header">Tambah Data Motor</div>
                </center>

                <div class="card-body">
                    <form action="{{route('motor.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">Kode</label>
                    <input class="form-control
                    @error('motor_kode') is-invalid @enderror" type="text"
                    name="motor_kode" id="" required>
                    @error('motor_kode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">merk</label>
                    <input class="form-control
                    @error('merk motor') is-invalid @enderror" type="text"
                    name="merk motor" id="" required>
                    @error('merk motor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">type</label>
                    <input class="form-control
                    @error('type_motor') is-invalid @enderror" type="text"
                    name="type_motor" id="" required>
                    @error('type_motor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">warna</label>
                    <input class="form-control
                    @error('warna_motor') is-invalid @enderror" type="text"
                    name="warna_motor" id="" required>
                    @error('warna_motor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">harga</label>
                    <input class="form-control
                    @error('harga_motor') is-invalid @enderror" type="text"
                    name="harga_motor" id="" required>
                    @error('harga_motor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">gambar</label>
                    <input class="form-control
                    @error('gambar_motor') is-invalid @enderror" type="text"
                    name="gambar_motor" id="" required>
                    @error('gambar_motor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info btn-rounded btn-block">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</section>
@endsection