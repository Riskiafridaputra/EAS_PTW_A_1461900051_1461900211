@extends('admin.layout');
@section('badan')
<table style="width: 100%">
    <thead>
        <tr>
            <th scope="col">Kode Transaksi</th>
            <th scope="col">ID User</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($transaksi as $t)
        <tr>
            <td><center>{{$t->hd_trpem}}</center></td>
            <td>{{$t->id_trpem}}</td>
            <td>{{$t->total}}</td>
            <td>
                <a href="/transaksi/kirim/{{$t->hd_trpem}}"><button class="btn btn-success">kirim</button></a>
                <a href="/transaksi/lihat/{{$t->hd_trpem}}"><button class="btn btn-success">lihat</button></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection