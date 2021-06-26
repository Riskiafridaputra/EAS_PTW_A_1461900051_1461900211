<!DOCTYPE html>
<html lang="en">

<head>
	<title>admin</title>

	<link rel="stylesheet" type="text/css" href="{{asset("css.css")}}">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<script type="text/javascript" src="jquery.js"></script>
</head>

<body>

	<div class="content">
		<header>
			<h1 class="judul">ADMIN</h1>

		</header>

		<div class="menu">
			<ul>
				<li><a href="/admin/barang">BARANG</a></li>
				<li><a href="/transaksi">TRANSAKSI</a></li>
				<li><a href="/admin/user">USER</a></li>
				<li><a href="/laporan">LAPORAN</a></li>
				<li><a href="/logout">LOGOUT</a></li>
			</ul>
		</div>

		<div class="badan">

			@yield('badan')


		</div>
	</div>
</body>

</html>