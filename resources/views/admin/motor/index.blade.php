<div class="container">
   <div class="row justify-content-center">
     <div class="col-md-12">
       <div class="card">
         <div class="card-header">Motor</div>
         <br>
         <div class="table-responsive">
         <table class="table">
           <tr>
             <th>No</th>
             <th>Motor Kode</th>
             <th>Motor Merk</th>
             <th>Motor Type</th>
             <th>Motor Warna Pilihan</th>
             <th>Motor Harga</th>
             <th>Motor Gambar</th>
             <th clospan="3" style="text-align: center,">Aksi</th>
             </tr>
        @php $no =1; @endphp
        @foreach($motor as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->motor_kode }}</td>
            <td>{{ $data->motor_merk }}</td>
            <td>{{ $data->motor_type }}</td>
            <td>{{ $data->motor_warna_pilihan }}</td>
            <td>{{ $data->motor_harga }}</td>
            <td>{{ $data->motor_gambar }}</td>
            <td><a href="{{ route('motor.edit',$data->id }}" class="btn btn-warning">Edit</a></td>
            <td><a href="{{ route('motor.show'.$data->id }}" class="btn btn-succes">Detail Data</a></td>
            <td><form action="{{ route('motor.destory'.$data->id)}}"method="post">
            @csrf
            <input type="hidden" name="_method" value="DELETE">
            <button class="btn btn -sm btn-danger" type="submit">Hapus Data</button>
            </form>
            <td>
           <tr>
          @endforeach
          </table>
        </div>
        </div>
    </div>
</div>

