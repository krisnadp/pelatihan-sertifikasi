<?php
include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!doctype html>
<html>

<head>
	<title>Sistem Informasi Perpustakaan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

	<nav class="navbar navbar-dark bg-dark rounded-bottom shadow-lg">
		<div class="container">
			<a class="navbar-brand" href="#">
				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-bootstrap-fill" viewBox="0 0 16 16">
					<path d="M6.375 7.125V4.658h1.78c.973 0 1.542.457 1.542 1.237 0 .802-.604 1.23-1.764 1.23H6.375zm0 3.762h1.898c1.184 0 1.81-.48 1.81-1.377 0-.885-.65-1.348-1.886-1.348H6.375v2.725z" />
					<path d="M4.002 0a4 4 0 0 0-4 4v8a4 4 0 0 0 4 4h8a4 4 0 0 0 4-4V4a4 4 0 0 0-4-4h-8zm1.06 12V3.545h3.399c1.587 0 2.543.809 2.543 2.11 0 .884-.65 1.675-1.483 1.816v.1c1.143.117 1.904.931 1.904 2.033 0 1.488-1.084 2.396-2.888 2.396H5.062z" />
				</svg>
				<span class="fs-4">Perpustakaan Umum</span>
			</a>
			<div class="navbar-text dropdown">
				<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
					<strong>Hi, Admin!</strong>
				</a>
				<ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
					<li><a class="dropdown-item" href="#">Settings</a></li>
					<li><a class="dropdown-item" href="#">Profile</a></li>
					<li>
						<hr class="dropdown-divider">
					</li>
					<li><a class="dropdown-item" href="#">Sign out</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="p-5 mb-4 bg-light rounded-3">
		<div class="container-fluid py-5">
			<h1 class="display-5 fw-bold">PERPUSTAKAAN UMUM</h1>
			<p class="col-md-8">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores obcaecati laudantium error ut ullam! Harum, recusandae esse. Voluptatibus laudantium eius necessitatibus dolorem nihil, cum eaque? Cum fuga debitis ipsum officia. <b>Jl. Lembah Abang No 11, Telp: (021)55555555</b></p>
			<button class="btn btn-primary" type="button">Lihat Detail</button>
		</div>
	</div>

	<div class="row g-0">
		<div class="col-md-3">
			<ul class="nav flex-column">
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=beranda">Beranda</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=anggota">Data Anggota</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=buku">Data Buku</a>
				</li>
				<li class="nav-item">
					<a class="nav-link text-dark py-2 mb-2" href="index.php?p=transaksi-peminjaman">Transaksi Peminjaman</a>
				</li>
			</ul>
		</div>
		<div class="col-md-9">
			<?php
			$pages_dir = 'pages';
			if (!empty($_GET['p'])) {
				$pages = scandir($pages_dir, 0);
				unset($pages[0], $pages[1]);
				$p = $_GET['p'];
				if (in_array($p . '.php', $pages)) {
					include($pages_dir . '/' . $p . '.php');
				} else {
					echo 'Halaman Tidak Ditemukan';
				}
			} else {
				include($pages_dir . '/beranda.php');
			}
			?>
		</div>
	</div>

	<div class="p-5 bg-white rounded-3">
		<div class="container-fluid">
			<p class="text-center">&copy Sistem Informasi Perpustakaan (sipus) | Praktikum </p>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>