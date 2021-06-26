@extends('admin.layout');
@section('badan')
<table style="width: 100%">
    <thead>
        <tr>
            <th scope="col">Kode Transaksi</th>
            <th scope="col">ID User</th>
            <th scope="col">Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach($laporan as $l)
        <tr>
            <td><center>{{$l->hd_trpem}}</center></td>
            <td>{{$l->id_trpem}}</td>
            <td>{{$l->total}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection