@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <center>
                    <div class="card-header">Data Pembeli</div>
                </center>

                <div class="card-body">
                    <form action="{{route('pembeli.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">Kode</label>
                    <input class="form-control
                    @error('NO_KTP') is-invalid @enderror" type="text"
                    name="NO_KTP" id="" required>
                    @error('NO_KTP')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">nama</label>
                    <input class="form-control
                    @error('nama_pembeli') is-invalid @enderror" type="text"
                    name="nama_pembeli" id="" required>
                    @error('nama_pembeli')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">alamat</label>
                    <input class="form-control
                    @error('alamat_pembeli') is-invalid @enderror" type="text"
                    name="alamat_pembeli" id="" required>
                    @error('alamat_pembeli')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">telepon</label>
                    <input class="form-control
                    @error('pembeli_no_tlp_pembelitelepon') is-invalid @enderror" type="text"
                    name="no_tlp_pembeli" id="" required>
                    @error('no_tlp_pembeli')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">no hp</label>
                    <input class="form-control
                    @error('hp_pembeli') is-invalid @enderror" type="text"
                    name="hp_pembeli" id="" required>
                    @error('hp_pembeli')
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