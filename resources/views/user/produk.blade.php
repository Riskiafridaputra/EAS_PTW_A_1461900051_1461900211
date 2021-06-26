@extends('user.layout')
@section('content')
	<!-- start: Page Title -->
	<div id="page-title">

		<div id="page-title-inner">

			<!-- start: Container -->
			<div class="container">

				<h2><i class="ico-stats ico-white"></i>Produk Detail Produk</h2>

			</div>
			<!-- end: Container  -->

		</div>

	</div>
	<!-- end: Page Title -->

	<!--start: Wrapper-->
	<div id="wrapper">

		<!--start: Container -->
		<div class="container">
			<div class="title">
				<h3>Detail Produk</h3>
			</div>
			
			<!-- start: Row -->

			<div class="row">
				<div class="col-sm-6">
					<!--<div class="span4">-->
					<!--<div class="icons-box">-->
					<div class="hero-unit" style="margin-left: 20px;">
						@foreach($barang as $Barang)
						<table>
							<tr>
								<td rowspan="7"><img src="{{asset("img/".$Barang->br_gbr)}}"></td>
							</tr>
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
									<h3>Harga</h3>
								</td>
								<td>
									<h3>:</h3>
								</td>
								<td>
									<div>
										<h3>Rp.{{$Barang->br_hrg}}</h3>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<h3>Stock</h3>
								</td>
								<td>
									<h3>:</h3>
								</td>
								<td>
									<div>
										<h3>
											@if($Barang->br_stok > 0)
											<strong style="color: blue;">In Stock</strong>
											@else
											<strong style="color: red;">Out Of Stock</strong>
											@endif
										</h3>
									</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td>
									<h3>Keterangan</h3>
								</td>
								<td>
									<h3>:</h3>
								</td>
								<td>
									<div>
										<h3>{{$Barang->ket}}</h3>
									</div>
								</td>
							</tr>
							<!--	<p>
						
						</p> -->
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td>
									<div class="clear"> <a
											href="/keranjang/{{$Barang->br_id}}"
											class="btn btn-lg btn-danger">Beli &raquo;</a></div>
								</td>
							</tr>

						</table>
						@endforeach
					</div>
					<a href="/index"><button class="btn btn-lg btn-success">Kembali</button></a>
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
	