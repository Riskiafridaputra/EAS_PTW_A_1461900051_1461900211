<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function(){ return view ('login'); });
Route::get('/register', function(){ return view ('register'); });

Route::get('/login/action','App\Http\Controllers\CustController@login')->name('login');
Route::get('/logout','App\Http\Controllers\CustController@logout')->name('logout');
Route::get('/register/input','App\Http\Controllers\CustController@register')->name('register_input');


Route::get('/index','App\Http\Controllers\CustController@index')->name('index');
Route::get('/produk/detail/{id}','App\Http\Controllers\CustController@detail')->name('detail');
Route::get('/keranjang/{id}','App\Http\Controllers\CustController@add_cart')->name('add_cart');
Route::get('/keranjang/batal/{id}','App\Http\Controllers\CustController@batal_pesan')->name('batal_cart');
Route::get('/keranjang','App\Http\Controllers\CustController@keranjang')->name('keranjang');
Route::post('/keranjang/update','App\Http\Controllers\CustController@update_keranjang')->name('update_keranjang');
Route::get('/beli','App\Http\Controllers\CustController@beli')->name('beli');
Route::get('/pembelian','App\Http\Controllers\CustController@pembelian')->name('pembelian');
Route::get('/pembelian/lihat/{id}','App\Http\Controllers\CustController@lihat_pembelian')->name('lihat_pembelian');
Route::get('/pembelian/diterima/{id}','App\Http\Controllers\CustController@terima')->name('diterima');

Route::get('/admin/barang','App\Http\Controllers\AdminController@barang')->name('barang');
Route::get('/admin/user','App\Http\Controllers\AdminController@user')->name('user');
Route::get('/admin/barang/tambah',function(){return view('admin.tambah_barang');})->name('barang_tambah');
Route::post('/admin/barang/tambah/aksi','App\Http\Controllers\AdminController@tambah_barang')->name('aksi_tambah');
Route::get('/admin/barang/edit/{id}','App\Http\Controllers\AdminController@edit_barang')->name('edit_barang');
Route::post('/admin/barang/edit/aksi','App\Http\Controllers\AdminController@edit_aksi')->name('edit_barang_aksi');
Route::get('/transaksi','App\Http\Controllers\AdminController@transaksi')->name('transaksi');
Route::get('/transaksi/lihat/{id}','App\Http\Controllers\AdminController@transaksi_lihat')->name('transaksi_lihat');
Route::get('/transaksi/kirim/{id}','App\Http\Controllers\AdminController@kirim')->name('kirim');
Route::get('/laporan','App\Http\Controllers\AdminController@laporan')->name('laporan');

