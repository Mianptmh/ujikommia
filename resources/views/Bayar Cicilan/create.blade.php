@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <center>
                    <div class="card-header">Tambah Data Bayar Cicilan</div>
                </center>

                <div class="card-body">
                    <form action="{{route('motor.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">Kode</label>
                    <input class="form-control
                    @error('cicilan_kode') is-invalid @enderror" type="text"
                    name="cicilan_kode" id="" required>
                    @error('cicilan_kode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">kode</label>
                    <input class="form-control
                    @error('kridit_kode') is-invalid @enderror" type="text"
                    name="kridit_kode" id="" required>
                    @error('kridit_kode')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">tanggal</label>
                    <input class="form-control
                    @error('cicilan_tanggal') is-invalid @enderror" type="text"
                    name="cicilan_tanggal" id="" required>
                    @error('cicilan_tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">jumlah</label>
                    <input class="form-control
                    @error('cicilan_jumlah') is-invalid @enderror" type="text"
                    name="cicilan_jumlah" id="" required>
                    @error('cicilan_jumlah')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">ke</label>
                    <input class="form-control
                    @error('cicilan_ke') is-invalid @enderror" type="text"
                    name="cicilan_ke" id="" required>
                    @error('cicilan_ke')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">sisa</label>
                    <input class="form-control
                    @error('ciclian_sisa_ke') is-invalid @enderror" type="text"
                    name="ciclian_sisa_ke" id="" required>
                    @error('ciclian_sisa_ke')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">sisa</label>
                    <input class="form-control
                    @error('cicilan_sisa_harga') is-invalid @enderror" type="text"
                    name="cicilan_sisa_harga" id="" required>
                    @error('cicilan_sisa_harga')
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