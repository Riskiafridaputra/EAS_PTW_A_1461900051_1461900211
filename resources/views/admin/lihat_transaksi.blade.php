@extends('admin.layout');
@section('badan')
<table style="width: 100%">
    <thead>
        <tr>
            <th scope="col">Kode Transaksi</th>
            <th scope="col">ID User</th>
            <th scope="col">ID Barang</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $t)
        <tr>
            <td><center>{{$t->hd_trpem}}</center></td>
            <td>{{$t->id_trpem}}</td>
            <td>{{$t->br_trpem}}</td>
            <td>{{$t->qty_trpem}}</td>
            <td>{{$t->hrg_trpem}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="/transaksi"><button class="btn btn-danger">Kembali</button></a>
@endsection