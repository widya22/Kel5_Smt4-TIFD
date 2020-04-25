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
	<?php

	?>
		<div class="main-wrapper-first">
			<div class="hero-area relative">
				<header>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<i class="fa fa-envelope fa-2x"></i>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link ml-2 mr-2" href="#">Beranda</a>
						</li>
						<li class="nav-item">
							<a class="nav-link ml-2 mr-2" href="#">Surat Saya</a>
						</li>
						
						</ul>
						<li class="nav-item dropdown list-unstyled border border-primary text primary">
								<?php
								if(isset($_SESSION["status"])){ 
												$nama = $_SESSION['nama'];
												foreach($nama as $u){ 
													$nama_user= $u->NAMA_MHS;
												}
									?>
									<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											User : @<?php echo $nama_user ?>
										</a>
										<div class="dropdown-menu float-right" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="#"><?php echo $nama_user ?></a>
											<a class="dropdown-item" href="#">Ubah Akun</a>
											<div class="dropdown-divider"></div>
											<a class="dropdown-item" href="<?php echo base_url('login/logout'); ?>">Keluar?</a>
										</div>

								<?php }else{ ?>
									<a href="#" data-toggle="modal"  class="nav-link" aria-haspopup="true" aria-expanded="false"
                            		data-target="#modalLogin">Masuk/Daftar</a>
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
									<h1 class="text-uppercase text-white"><span>E-Surat JTI POLIJE</span> <br><!--diisi kalo butuh--></h1>
									<p class="text-white p-2 mb-30">
										inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards – especially in the workplace. That’s why it’s crucial that, as women.
									</p>
									<a class="btn btn-light btn-lg text-info rounded-pill pr-5 pl-5" href="http://localhost/Kel6_Smt4-TIFD/E41181216_NUR_HADI/Kel5_Smt4-TIFD/web_user/dashboard">Buat Surat Sekarang <i class="fa fa-2x fa-chevron-right text-info ml-2"></i></a>
									<!-- <button type="button" class="btn btn-primary btn-lg">Buat Surat Sekarang  <i class="fa fa-chevron-circle-right text-light"></i></button> -->
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
			<!-- Start Footer Widget Area -->
			<section class="footer-area pt-60 pb-60">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<ul class="footer-menu">
							<li>
								<a href="index.html">Beranda</a>
							</li>
							<li>
								<a href="elements.html">Author</a>
							</li>
						</ul>
					</div>
					<footer>
							<div class="footer-social">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>
							<div class="footer-content">
								<div class="text-center">
									Copyright © 2020 
							</div>
						</div>
					</footer>
			</section>
			<!-- End Footer Widget Area -->
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
                    <form action="<?php echo base_url().'crud/register'; ?>" method="post">
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
<!-- modal -->
	</body>
</html>
