@extends('admin.layout');
@section('badan')
<table style="width: 100%">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor Telp</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $User)
        <tr>
            <td>{{$User->id}}</td>
            <td>{{$User->name}}</td>
            <td>{{$User->username}}</td>
            <td>{{$User->email}}</td>
            <td>{{$User->alamat}}</td>
            <td>{{$User->no_telp}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection