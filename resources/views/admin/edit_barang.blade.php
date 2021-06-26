@extends('admin.layout');
@section('badan')

<h3 class="deskripsi">Tambah Barang</h3>
<form action="/admin/barang/edit/aksi" method="post" enctype="multipart/form-data">
    @csrf
    @foreach ($barang as $Barang)
    <input name="id" type="hidden" value="{{$Barang->br_id}}">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Stok Barang</span>
        <input name="stok" type="number" value="{{$Barang->br_stok}}" class="form-control">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Harga Barang</span>
        <input name="harga" type="number" value="{{$Barang->br_hrg}}" class="form-control">
    </div>
    <a href="/admin/barang"><button type="button" class="btn btn-success">Kembali</button></a>
    <button type="submit" class="btn btn-success">Tambah</button>
    @endforeach
</form>

@endsection