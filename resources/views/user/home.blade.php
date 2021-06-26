@extends('user.layout')
@section('content')
<div id="wrapper">

    <!--start: Container -->
    <div class="container">

        <!-- start: Hero Unit - Main hero unit for a primary marketing message or call to action -->
        <div class="hero-unit">
            <p>
                Kami adalah distro online terlengkap dan terpercaya, dengan harga terjangkau kurang dari 100rb anda
                sudah dapat memiliki produk kami. Selamat Berbelanja Customer..
            </p>

        </div>



        <!-- start: Row -->

        <div class="row">
            @foreach($barang as $Barang)
            <div class="span4">
                <div class="icons-box">
                    <div class="title">
                        <h3>{{$Barang->br_nm}}</h3>
                    </div>
                    <img src="{{asset("img/".$Barang->br_gbr)}}" />
                    <div>
                        <h3>Rp.{{$Barang->br_hrg}}</h3>
                    </div>
                    <!--	<p>
                    
                    </p> -->
                    <div class="clear"><a href="/produk/detail/{{$Barang->br_id}}" class="btn btn-lg btn-danger">Detail</a> <a href="/keranjang/{{$Barang->br_id}}"
                            class="btn btn-lg btn-success">Beli &raquo;</a></div>

                </div>
            </div>
            @endforeach
            <!---->
        </div>
        <!-- end: Row -->

    </div>
</div>
@endsection