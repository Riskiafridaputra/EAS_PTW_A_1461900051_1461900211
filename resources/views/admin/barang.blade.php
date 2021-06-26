@extends('admin.layout');
@section('badan')
<a href="/admin/barang/tambah"><button type="button" style="margin-top : 20px;margin-bottom :50px;" class="btn btn-info">Tambah Barang</button></a>
<table style="width: 100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Keterangan</th>
            <th scope="col">Stok</th>
            <th scope="col">Gambar</th>
            <th scope="col">Opsi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($barang as $Barang)
        <tr>
            <td>{{$Barang->br_id}}</td>
            <td>{{$Barang->br_nm}}</td>
            <td>{{$Barang->br_hrg}}</td>
            <td>{{$Barang->ket}}</td>
            <td>{{$Barang->br_stok}}</td>
            <td><img width="150px" src="{{asset("img/".$Barang->br_gbr)}}"></td>
            <td><a href="/admin/barang/edit/{{$Barang->br_id}}"><button type="button" style="margin-top : 20px;margin-bottom :50px;" class="btn btn-warning">Edit Barang</button></a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection