@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <center>
                    <div class="card-header">Tambah Beli Case</div>
                </center>

                <div class="card-body">
                    <form action="{{route('belicase.store')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <label for="">No</label>
                    <input class="form-control
                    @error('pembeli_no_ktp') is-invalid @enderror" type="text"
                    name="pembeli_no_ktp" id="" required>
                    @error('pembeli_no_ktp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">kode</label>
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
                    <label for="">Tanggal</label>
                    <input class="form-control
                    @error('cash_tanggal') is-invalid @enderror" type="date"
                    name="cash_tanggal" id="" required>
                    @error('cash_tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">bayar</label>
                    <input class="form-control
                    @error('cash_tanggal') is-invalid @enderror" type="text"
                    name="cash_tanggal" id="" required>
                    @error('cash_tanggal')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
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