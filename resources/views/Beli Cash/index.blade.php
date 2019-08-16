@extends('layouts.app')
@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Beli Case</h5><br>
                <center>
                    <a href="{{ route('belicase.create')}}"
                        class="la la-cloiud-upload btn btn-info btn-rounded btn-floating btn-outline=">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped tablebordered" style="width:100%">
                        <thead>
                                <tr>
                                <th>pembeli no ktp </th>
                                <th>motor_kode</th>
                                <th>cash tanggal</th>
                                <th>cash bayar</th>

                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($belicase as $data)
                            <tr>
                                <td>{{$data->pembeli_no_ktp}}</td>
                                <td>{{$data->motor_kode}}</td>
                                <td>{{$data->case_tanggal}}</td>
                                <td>{{$data->cash_bayar}}</td>

                                <td style="text-align: center;">
                                    <form action="{{route('belicase.destory', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('belicase.edit', $data->id)}}"
                                        class="zmdi zmdi -eye btn btn-succes btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('belicase.show', $data->id)}}"
                                        class="zmdi zmdi -eye btn btn-succes btn-rounded btn-floating btn-outline"> Show
                                    </a>
                                        <input type="hidden" name="method" value="Delete">
                                        <button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline">Delete
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </body>
                    </table>
                </div>
            </div>
        </div>
    </div>
</endsection>
@endsection