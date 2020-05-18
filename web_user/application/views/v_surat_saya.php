<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav.png') ?>">
	<!-- Author Meta -->
	<meta name="author" content="Colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>JTI-Surat</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,300,500,600" rel="stylesheet">
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<div class="main-wrapper-first pb-5">
		<div class="modal-body"><?= $this->session->flashdata('message') ?></div>
		<div class="hero-area relative">
			<header>
				<nav class="row navbar navbar-expand-sm navbar-light bg-light col-lg-13">
					<i class="fa fa-envelope fa-2x"></i>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2 border-left border-right" href="#">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2 border-left border-right" href="#">Surat Saya</a>
							</li>

						</ul>
						<li class="nav-item dropdown list-unstyled border border-primary text primary">
						
							<?php
							if (isset($_SESSION["status"])) {
								$nama = $_SESSION['hasil_db'];
								foreach ($nama as $u) {
									$nama_user = $u->NAMA_MHS;
								}
							?>
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									User : @<?php echo $nama_user ?>
								</a>
								<div class="dropdown-menu float-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#"><?php echo $nama_user ?></a>
									<a class="dropdown-item" href="#">Ubah Akun</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal" id="keluar">Keluar</a>
								</div>

							<?php } else { 
								redirect('home', 'location');
							 } ?>
						</li>
					</div>
				</nav>
			</header>

			<div class="banner-area relative pb-5 border-top  border-secondary">
				<div class="bg-light"></div>
					<div class="row justify-content-center bg-light pl-5 pr-5 pb-2">
								<h1 class="text-uppercase text-orange mt-4 pl-2 pr-2 border"><span> Surat Saya </span></h1>
						</div>

					<div class="row justify-content-center bg-light pl-5 pr-5">
						<!-- tombol pilhan -->
						<div class="btn-group btn-group-toggle mb-2 modal-body border shadow-sm" data-toggle="buttons">
							<label class="btn btn-outline-primary border border-primary active border ml-1 mr-1 rounded">
								<input type="radio" name="options" id="option1" autocomplete="off" checked> Semua
							</label>
							<label class="btn btn-outline-primary border border-primary border ml-1 mr-1 rounded">
								<input type="radio" name="options" id="option2" autocomplete="off"> Diproses
							</label>
							<label class="btn btn-outline-primary border border-primary border ml-1 mr-1 rounded">
								<input type="radio" name="options" id="option3" autocomplete="off"> Bisa Diambil
							</label>
							<label class="btn btn-outline-primary border border-primary border ml-1 mr-1 rounded">
								<input type="radio" name="options" id="option2" autocomplete="off"> Selesai
							</label>
							<label class="btn btn-outline-primary border border-primary border ml-1 mr-1 rounded">
								<input type="radio" name="options" id="option2" autocomplete="off"> Gagal
							</label>
						</div>
					</div>

					<div class="row justify-content-center bg-light pl-5 pr-5 pb-5 ">
						<!-- table surat saya -->
							<div class="rounded bg-white border row modal-body shadow p-3 mb-5">
									<table class="table table-bordered">
									<thead>
										<tr>
										<th scope="col">1</th>
										<th scope="col">Surat Survey</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										<th scope="col"></th>
										<td>Tanggal Pengajuan : <span>18 Mei 2020</span></td>
										</tr>
										<tr>
										<th scope="col"></th>
										<td>Nama Mitra : <span>Surabaya45</span></td>
										</tr>
										<tr>
										<th scope="col"></th>
										<td class="bg-success text-light">Alamat Mitra : <span>Jember Jawa Timur</span></td>
										</tr>
										<tr>
										<th scope="col"></th>
										<td>
											Status :
											<label class="btn btn-info " disabled>DiProses</label>
										</td>
										</tr>
									</tbody>
									</table>

									<table class="table table-bordered">
									<thead>
										<tr>
										<th scope="col">2</th>
										<th scope="col">Surat Survey</th>
										</tr>
									</thead>
									<tbody>
										<tr>
										<th scope="col"></th>
										<td>Tanggal Pengajuan : <span>20 Mei 2020</span></td>
										</tr>
										<tr>
										<th scope="col"></th>
										<td>Nama Mitra : <span>Surabaya46</span></td>
										</tr>
										<tr>
										<th scope="col"></th>
										<td class="bg-success text-light">Alamat Mitra : <span>Jember Jawa Timur</span></td>
										</tr>
										<tr>
										<th scope="col"></th>
										<td>
											Status :
											<label class="btn btn-success " disabled>Bisa Diambil</label>
										</td>
										</tr>
									</tbody>
									</table>
									
							</div>
						</div>
					</div>
				</div>
			</div>
	
	<script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/vendor/bootstrap.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.ajaxchimp.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/js/waypoints.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/jquery.counterup.min.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/main.js') ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
	<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

	<!-- modal -->
	<!-- modal login -->
	<div id="modalLogin" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Masuk</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- form login -->
					<form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
						<div class="form-group">
							<label for="nim">NIM</label>
							<input type="text" name="nim" placeholder="NIM" class="form-control" />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control" />
						</div>
						<a href="<?php echo base_url('home/register'); ?>" class="text-center">Belum punya akun?</a>
						<div class="text-right">
							<button class="btn btn-primary" type="submit">Masuk</button>
						</div>
					</form>
					<!-- end form login -->
				</div>
			</div>
		</div>
	</div>

	<!-- modal Register -->
	<div id="modalDaftar" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Daftar</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="<?php echo base_url() . 'crud/register'; ?>" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" placeholder="Username" class="form-control" />
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" placeholder="Password" class="form-control" />
						</div>
						<div class="text-right">
							<button class="btn btn-primary" type="submit">Daftar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<!-- modal keluar -->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Pilih "Keluar" jika ingin mengakhirinya.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Keluar</a>
				</div>
			</div>
		</div>
	</div>

	<!-- modal selamat datang daftar -->
	<div class="modal fade" id="modalSelamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
					
				<div class="modal-body">
				<img src="<?php echo base_url("assets/images/selamatdatang.png") ?>">
				<h4 class="text-center">Selamat Datang di JTI-Surat</h4>
				<p class="text-center text-secondary mt-4">Sekarang anda bisa melakukan pengajuan surat kepada admin jurusan yeayy. Buat harimu lebih semangat dengan mengatakan <strong>"Aku Semangat"</strong></p>
				<br>
				<div class="text-center">
				<button class="hidden btn btn-outline-primary rounded-pill pr-5 pl-5 mb-3" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">Aku Semangat</span>
					</button>
				</div>
				</div>
			</div>
		</div>
	</div>

	<!-- modal -->
	<script>
	var button=document.getElementById("mdtr");
	<?php if (isset($_SESSION["daftar"])){ ?>
        button.click();
		<?php } ?>
	</script>

</body>

</html>