@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data motor</h5><br>
                <center>
                    <a href="{{ route('motor.create')}}"
                        class="la la-cloiud-upload btn btn-info btn-rounded btn-floating btn-outline=">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped tablebordered" style="width:100%">
                        <thead>
                                <tr>
                                <th>kode motor</th>
                                <th>merk motor</th>
                                <th>type motor</th>
                                <th>warna motor</th>
                                <th>harga motor</th>
                                <th>gambar motor</th>

                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($motor as $data)
                            <tr>
                                <td>{{$data->kode_motor}}</td>
                                <td>{{$data->merk_motor}}</td>
                                <td>{{$data->type_motor}}</td>
                                <td>{{$data->warna_motor}}</td>
                                <td>{{$data->harga_motor}}</td>
                                <td>{{$data->gambar_motor}}</td>

                                <td style="text-align: center;">
                                    <form action="{{route('motor.destory', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('motor.edit', $data->id)}}"
                                        class="zmdi zmdi -eye btn btn-succes btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('motor.show', $data->id)}}"
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