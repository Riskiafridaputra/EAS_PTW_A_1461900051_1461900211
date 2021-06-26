@extends('user.layout')
@section('content')
<!-- start: Page Title -->
<div id="page-title">

    <div id="page-title-inner">

        <!-- start: Container -->
        <div class="container">

            <h2><i class="ico-stats ico-white"></i>Detail Keranjang</h2>

        </div>
        <!-- end: Container  -->

    </div>

</div>
<!-- end: Page Title -->

<!--start: Wrapper-->
<div id="wrapper">

    <!--start: Container -->
    <div class="container">
        

        <!-- start: Row -->

        <div class="row">
            <div class="col-sm-6">
                <!--<div class="span4">-->
                <!--<div class="icons-box">-->
                <div class="hero-unit" style="margin-left: 20px;">

                    @foreach($barang as $Barang)
                    <table>
                        <tr>
                            <td colspan="4">
                                <div class="title">
                                    <h3>{{$Barang->br_nm}}</h3>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td size="200">
                                <h3>Jumlah</h3>
                            </td>
                            <td>
                                <h3>:</h3>
                            </td>
                            
                                <td>
                                    <div>
                                        <h3>{{$Barang->qty_trpem}}</h3>
                                    </div>

                                </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td size="200">
                                <h3>Harga</h3>
                            </td>
                            <td>
                                <h3>:</h3>
                            </td>
                            <td>
                                <div>
                                    <h3>Rp.{{$Barang->sts_trpem}}</h3>
                                </div>
                            </td>
                        </tr>

                        <!--	<p>
						
						</p> -->
                        <tr>
                            <td></td>
                            <td size="200">
                                <h3>Status</h3>
                            </td>
                            <td>
                                <h3>:</h3>
                            </td>
                            <td>
                                <div>
                                    <h3>{{$Barang->sts_trpem}}</h3>
                                </div>
                            </td>
                            
                        </tr>
                        

                    </table>
                    <br>
                    @endforeach
                </div>
                <a href="/pembelian"><button class="btn btn-lg btn-success">Kembali</button></a>
                <!--</div> -->
                <!--</div> -->
                <!---->
            </div>
            <!-- end: Row -->


        </div>


    </div>

</div>

<!--end: Row-->

<!--end: Container-->
@endsection