<!-- Page Preloder -->
<div id="preloder">
	<div class="loader"></div>
</div>

<a href="#" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modalSelamat" id="mdtr"></a>

<!-- alert masuk atau daftar -->
<?php if (isset($_SESSION["status"])) { ?>
	<div class="alert alert-info alert-dismissible fade show">
		<strong>Halo!</strong> Selamat anda berhasil Masuk.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	
	<a href="#" data-toggle="modal" aria-haspopup="true" aria-expanded="false" data-target="#modalSelamat" id="mdtr"></a>

<!-- alert masuk atau daftar -->
	<?php  
	if (isset($_SESSION["status"])){ //jika status ada isinya

	if($_SESSION["status"]=="login"){ ?>
	<div class="alert alert-info alert-dismissible fade show">
		<i class="fa fa-check-circle text-success"></i>
		<strong>Halo!</strong> Selamat login anda berhasil.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php }else if($_SESSION["status"]=="daftar"){ ?>
		<div class="alert alert-warning alert-dismissible fade show">
		<i class="fa fa-check-circle text-success"></i>
		<strong>Halo!</strong> Selamat anda berhasil Mendaftar.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php }} ?>
<!-- alert masuk atau daftar -->

	<div class="main-wrapper-first">
		<div class="modal-body"><?= $this->session->flashdata('message') ?></div>
		<div class="hero-area relative">
			<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-light col-lg-12 ml-1 row">
					<i class="fa fa-envelope fa-2x"></i>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2" href="#">Beranda</a>
							</li>
							<?php if (isset($_SESSION["status"])) { ?>
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2" href="<?php echo base_url().'home/surat_saya'?>">Surat Saya</a>
							</li>
							<?php } else { ?>
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2" href="#" data-toggle="modal" data-target="#modalLogin">Surat Saya</a>
							</li>
							<?php } ?>
							

						</ul>
						<li class="nav-item dropdown list-unstyled border border-primary text primary">
						
							<?php
							if (isset($_SESSION["status"]) or isset($_SESSION["daftar"])) {
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

							<?php } else { ?>
								<a href="#" data-toggle="modal" class="nav-link" aria-haspopup="true" aria-expanded="false" data-target="#modalLogin">Masuk/Daftar</a>
							<?php } ?>
						</li>
					</div>
				</nav>

			</header>
			<div class="banner-area relative">
				<div class="overlay hero-overlay-bg"></div>
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-7">
							<div class="banner-content text-center">
								<h1 class="text-uppercase text-white"><span>JTI-Surat</span> <br>
									<!--diisi kalo butuh-->
								</h1>
								<p class="text-justify text-white mb-30">
								JTI-Surat adalah website untuk melakukan pengajuan pembuatan surat kepada Admin jurusan jurusan Teknologi Informasi seperti
								 surat pengajuan pkl, surat survey tempat dan lain-lain. JTI-Surat bertujuan untuk membantu mempermudah mahasiswa dan juga
								 admin jurusan dalam transaksi pembuatan surat. <strong>Klik tombol dibawah untuk mulai mengajukan surat</strong>
								</p>
								<?php if(isset($_SESSION["status"])){ ?>
								<a class="btn btn-light rounded-pill btn-lg" href="<?php echo base_url('form') ?>"><span class="text-primary">Buat Surat Sekarang </span><i class="fa fa-chevron-circle-right text-primary"></i></a>
								<!-- <button type="button" class="btn btn-primary btn-lg">Buat Surat Sekarang  <i class="fa fa-chevron-circle-right text-light"></i></button> -->
							<?php }else{ ?>
								<a class="btn btn-light rounded-pill btn-lg" href="#" data-toggle="modal" data-target="#modalLogin"><span class="text-primary">Buat Surat Sekarang </span><i class="fa fa-chevron-circle-right text-primary"></i></a>
							<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
<div class="main-wrapper">


	<!-- Start feature-bottom Area -->
	<section class="feature-bottom-area pt-100 pb-100 mr-5 ml-5">

		<table class="table table-borderless container text-center ">
			<thead>
				<tr>
					<th scope="col"><img class="mt-2 mb-2 img-fluid" height="80px" src="<?php echo base_url('assets/icon/waktu.png') ?>"></img></th>
					<th scope="col"><img class="mt-2 mb-2 img-fluid" height="80px" src="<?php echo base_url('assets/icon/tracking.png') ?>"></img></th>
					<th scope="col"><img class="mt-2 mb-2 img-fluid" height="80px" src="<?php echo base_url('assets/icon/cepat.png') ?>"></img></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Lebih Hemat Waktu</td>
					<td>Live Tracking</td>
					<td>Lebih Cepat</td>
				</tr>
			</tbody>
		</table>
	</section>
	<!-- End feature-bottom Area -->
	<!-- Start Subscription Area -->
	<section class="subscription-area pt-100 pb-100">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="section-title text-center">
						<h3 class="text-uppercase text-white"><span>Silahkan kirim masukan</span> <br>
						</h3>
						<!-- <span class="text-white">We won’t send any kind of spam</span> -->
					</div>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div id="mc_embed_signup">
						<form target="_blank" novalidate action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&id=92a4423d01" method="get" class="subscription relative">
							<input type="email" name="EMAIL" placeholder="Tulis Masukan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required>
							<div style="position: absolute; left: -5000px;">
								<input type="text" name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="">
							</div>
							<button class="primary-btn hover d-inline-flex align-items-center"><span class="mr-10">Kirim</span><span class="lnr lnr-arrow-right"></span></button>
							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Subscription Area -->

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

	<!-- modal selamat datang daftar -->
	<div class="modal fade" id="modalSelamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

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

	<!-- modal selamat daftar  -->
	<script>
	var button=document.getElementById("mdtr");
	<?php if (isset($_SESSION["popup"])){ ?>
        button.click();
		<?php } ?>
	</script>

		<?php //untuk hapus session
		$this->session->unset_userdata('popup');
		?>

</body>

</html>
