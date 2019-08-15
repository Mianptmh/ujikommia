@extends('layout.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <center>
                    <div class="card-header">Tambah Bayar Cicilan></div>
                </center>

                <div class="card-body">
                    <form action="{{route('bayar cicilan.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">Cicilan kode></label>
                    <input class="form-control
                    @error('cicilan_kode') is-invalid @enderror" type="text"
                    name="cicilan_kode" id="" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">nama</label>
                    <input class="form-control
                    @error('cicilan_kode') is-invalid @enderror" type="text"
                    name="cicilan_kode" id="" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                </div>

                <div class="form-group">
                    <label for="">nama</label>
                    <input class="form-control
                    @error('cicilan_kode') is-invalid @enderror" type="text"
                    name="cicilan_kode" id="" required>
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                </div>

                