@extends('layouts.app')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Pembeli</h5><br>
                <center>
                    <a href="{{ route('pembeli.create')}}"
                        class="la la-cloiud-upload btn btn-info btn-rounded btn-floating btn-outline=">&nbsp;Tambah Data
                    </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped tablebordered" style="width:100%">
                        <thead>
                                <tr>
                                <th>no ktp</th>
                                <th>nama</th>
                                <th>alamat</th>
                                <th>telepon</th>
                                <th>no hp</th>

                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($pembeli as $data)
                            <tr>
                                <td>{{$data->NO_KTP}}</td>
                                <td>{{$data->nama_pembeli}}</td>
                                <td>{{$data->alamat_pembeli}}</td>
                                <td>{{$data->no_tlp_pembeli}}</td>
                                <td>{{$data->hp_pembeli}}</td>

                                <td style="text-align: center;">
                                    <form action="{{route('pembeli.destory', $data->id)}}" method="post">
                                        {{csrf_field()}}
                                    <a href="{{route('pembeli.edit', $data->id)}}"
                                        class="zmdi zmdi -eye btn btn-succes btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('pembeli.show', $data->id)}}"
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