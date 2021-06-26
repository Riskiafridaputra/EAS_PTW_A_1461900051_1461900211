<?php

namespace App\Http\Controllers;

use GuzzleHttp\RetryMiddleware;
use Illuminate\support\Facades\DB;
use Illuminate\support\Facades\Auth;

use Illuminate\Http\Request;

class CustController extends Controller
{
    public function index()
    {
        $barang = DB::table('barang')->get();
        return view('user.home', ['barang' => $barang]);
    }
    public function detail($id)
    {
        $barang = DB::table('barang')->where('br_id', $id)->get();
        return view('user.produk', ['barang' => $barang]);
    }
    public function add_cart($id)
    {
        $barang = DB::table('barang')->where('br_id', $id)->first();
        $user = Auth::user()->id;
        // dd($barang->br_hrg);
        DB::table('pembelian')->insert([
            'id_pembeli' => $user,
            'id_barang' => $id,
            'total_hrg' => $barang->br_hrg,
            'jumlah' => '1',
        ]);
        return redirect('/index');
    }
    public function keranjang()
    {
        $user = Auth::user()->id;
        $keranjang = DB::table('pembelian')->join('barang', 'id_barang', '=', 'barang.br_id')->where('id_pembeli', $user)->get();
        return view('user.keranjang', ['barang' => $keranjang]);
    }
    public function update_keranjang(request $request)
    {
        $user = Auth::user()->id;
        $keranjang = DB::table('pembelian')->where('id_pembeli', $user)->where('id_barang', $request->id_produk)->first();
        $total = $request->jumlah * $keranjang->total_hrg;
        DB::table('pembelian')->where('id_pembeli', $user)->where('id_barang', $request->id_produk)->update([
            'jumlah' => $request->jumlah,
            'total_hrg' => $total,
        ]);
        return redirect('/keranjang');
    }
    public function beli()
    {
        $user = Auth::user()->id;
        $keranjang = DB::table('pembelian')->where('id_pembeli', $user)->get();
        $code = rand(0, 9999);
        // dd($keranjang->all());
        $trans = 'T1009' . sprintf("%04s", $code);
        
        foreach ($keranjang as $Keranjang) {
            DB::table('transaksi')->insert([
                'hd_trpem' => $trans,
                'id_trpem' => $user,
                'br_trpem' => $Keranjang->id_barang,
                'qty_trpem' => $Keranjang->jumlah,
                'hrg_trpem' => $Keranjang->total_hrg,
                'sts_trpem' => 'Diproses',
            ]);
        }
        DB::table('pembelian')->where('id_pembeli', $user)->delete();
        return redirect('/keranjang');
    }
    public function batal_pesan($id){
        $user = Auth::user()->id;
        DB::table('pembelian')->where('id_pembeli',$user)->where('id_barang', $id)->delete();
        return redirect('/keranjang');
    }
    public function pembelian (){
        $user = Auth::user()->id;
        $trans = DB::table('transaksi')->select(DB::raw('hd_trpem , sts_trpem, sum(hrg_trpem) as harga'))->where('id_trpem',$user)->groupby('hd_trpem','sts_trpem')->get();
        return view ('user.pembelian', ['trans'=>$trans]);
    }
    public function terima($id){
        DB::table('transaksi')->where('hd_trpem',$id)->update([
            'sts_trpem' => 'Diterima',
        ]);
        return redirect('/pembelian');
    }
    public function lihat_pembelian($id){
        $barang = DB::table('transaksi')->where('hd_trpem',$id)->join('barang','br_trpem','=','barang.br_id')->get();
        return view('user.lihat_pembelian',['barang'=>$barang]);
    }
    public function login(Request $request)
    {
        $username = $request->username;
        $user = DB::table('users')->where('username', $username)->get();
        if (Auth::attempt($request->only('username', 'password'))) {
            foreach ($user as $User) {
                if ($User->role == 'admin') {
                    return redirect('/admin/barang');
                } else {
                    return redirect('/index');
                }
            }
        }
        return redirect('/');
    }
    public function register(request $request) {
        DB::table('users')->insert([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'alamat' => $request->alamat,
            'no_telp' => $request->telp,
            'role' => 'user',
        ]);
        return redirect('/');
    }
    public function logout(Request $akun)
    {
        Auth::logout();
        return redirect('/');
    }
}
