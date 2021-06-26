<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\DB;
use File;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function barang(){
        $barang = DB::table('barang')->get();
        return view('admin.barang',['barang' => $barang]);
    }

    public function edit_barang($id){
        $barang = DB::table('barang')->where('br_id',$id)->get();
        return view('admin.edit_barang',['barang'=>$barang]);
    }

    public function edit_aksi(request $request){
        DB::table('barang')->where('br_id',$request->id)->update([
            'br_stok'=> $request->stok,
            'br_hrg'=> $request->harga,
        ]);
        return redirect('/admin/barang');
    }
    public function tambah_barang(request $request){
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $file = $request->file('file');
        
        $nama = time() . "_" . $file->getClientOriginalName();
        $upload = 'img/gambar';

        $file->move($upload, $nama);

        DB::table('barang')->insert([
            'br_nm' => $request->barang,
            'br_item' =>'1',
            'br_hrg' => $request->harga,
            'br_stok' => $request->stok,
            'br_satuan' => 'Pcs',
            'br_gbr' => 'gambar/'.$nama,
            'ket' => $request->keterangan,
            'br_sts' => 'Y',
        ]);
        return redirect ('/admin/barang');
    }
    public function user(){
        $user = DB::table('users')->where('role','user')->get();
        return view('admin.user',['user' => $user]);
    }
    public function transaksi(){
        $transaksi = DB::table('transaksi')->select(DB::raw('hd_trpem,id_trpem,sum(hrg_trpem) as total'))->groupBy('hd_trpem','id_trpem')->where('sts_trpem','Diproses')->get();
        return view('admin.transaksi',['transaksi' => $transaksi]);
    }
    public function transaksi_lihat($id){
        $transaksi = DB::table('transaksi')->where('hd_trpem',$id)->get();
        // dd($transaksi->all());
        return view('admin.lihat_transaksi',['transaksi'=> $transaksi]);
    }
    public function kirim($id){
        DB::table('transaksi')->where('hd_trpem',$id)->update([
            'sts_trpem' => 'Dikirim',
        ]);
        return redirect('/transaksi');
    }
    public function laporan(){
        $laporan = DB::table('transaksi')->select(DB::raw('hd_trpem,id_trpem,sum(hrg_trpem) as total'))->groupBy('hd_trpem','id_trpem')->where('sts_trpem','Diterima')->get();
        return view('admin.laporan',['laporan' => $laporan]);
    }
}
