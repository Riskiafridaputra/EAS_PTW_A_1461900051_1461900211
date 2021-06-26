@extends('admin.layout');
@section('badan')

<h3 class="deskripsi">Tambah Barang</h3>
<form action="/admin/barang/tambah/aksi" method="post" enctype="multipart/form-data">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Nama Barang</span>
        <input name="barang" type="text" class="form-control">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Harga Barang</span>
        <input name="harga" type="number" class="form-control">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Stok</span>
        <input name="stok" type="number" class="form-control">
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon2">Keterangan</span>
        <input name="keterangan" type="text" class="form-control">
    </div>
    <div class="input-group mb-3">
        <input name="file" type="file" class="form-control">
    </div>
    <a href="/admin/barang"><button type="button" class="btn btn-success">Kembali</button></a>
    <button type="submit" class="btn btn-success">Tambah</button>
</form>

@endsection