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
				<na class="row navbar navbar-expand-sm navbar-light bg-light col-lg-13">
					<i class="fa fa-envelope fa-2x"></i>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2 border-left border-right" href="<?php echo base_url() ?>">Beranda</a>
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
									<a class="dropdown-item text-center" href="<?php echo base_url('login/logout'); ?>" data-toggle="modal" data-target="#logoutModal" id="keluar">
									Keluar<i class="fa fa-sign-out pl-2"></i></a>
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
				<div class="row justify-content-center bg-light  pl-5 pr-5 pb-2 ">
					<h1 class="text-uppercase text-orange mt-4 pl-2 pr-2 border text-center"><span> Surat Saya </span></h1>
				</div>

				<?php $var = 1; //untuk mengecek variabel class di button bawah 
				?>
				<div class="row  bg-light pl-5 pr-5">
					<div class="mb-2 modal-body border shadow-sm text-center">
					<form method="post" class="text-center">
							 <a href="<?php echo base_url()."home/surat_saya" ?>" class="btn mb-1 rounded-pill
							 		<?php if(isset($_SESSION["semua"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>" flex-wrap>Semua</a>

							 <a href="<?php echo base_url()."home/surat_diproses" ?>" class="btn mb-1  rounded-pill
									<?php if(isset($_SESSION["diproses"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Diproses</a>

							 <a href="<?php echo base_url()."home/surat_diambil" ?>" class="btn mb-1 rounded-pill
							 		<?php if(isset($_SESSION["diambil"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Bisa Diambil</a>

							 <a href="<?php echo base_url()."home/surat_selesai" ?>" class="btn mb-1  rounded-pill
							 		<?php if(isset($_SESSION["selesai"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Selesai</a>

							 <a href="<?php echo base_url()."home/surat_gagal" ?>" class="btn mb-1  rounded-pill
							 		<?php if(isset($_SESSION["gagal"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Gagal</a>

						</form>
					</div>
				</div>

				<script>
					$(document).ready(function() {
						$(".options_c").click(function() { //Memberikan even ketika class detail di klik (class detail ialah class radio button)
							if ($("input[name='options']:checked").val() == "diproses") { //Jika radio button "berbeda" dipilih maka tampilkan form-inputan
								redirect("home/surat_saya");
							}
						});
					});
					</script>
			
					<div class="row justify-content-center bg-light pl-5 pr-5 pb-5 ">
						<!-- table surat saya -->

					<?php
					$i=1;
					foreach($database  as $i) : endforeach;
					if ($i != 1){ //jik	a database ada isinya
					$no = 1;
					foreach($database  as $u) :  //ubah variabel user ke u 
						$id=$u['ID_SURAT'];
						$id_su=$u['ID_JENIS_SURAT'];
						$jen_su=$u['JENIS_SURAT'];
						$tgl_aju=$u['TANGGAL_PENGAJUAN'];
						$nama=$u['NAMA_MITRA'];
						$alamat=$u['ALAMAT_MITRA'];
						$status=$u['STATUS_SURAT'];
						?>
						<!-- bagian atas dan status surat-->
									<table class="table table-bordered shadow rounded bg-surat">
									<thead>
									<tr class="bg-blue">
										<th scope="col" class="pl-5 text-center">
											<h5 class="text-secondary text-italic" disabled>Surat <?php echo $status ?></h5>
										</th>
									</tr>
						<!-- bagian tanggal dan nama surat -->
									<tr>
										<!-- <th scope="col justify-content-center"><h2><?php echo $no++; ?></h2></th> -->
										<th scope="col" class="pl-5 pr-3">
											<div class="d-flex">
												<div class="p-2"><h2 class="d-inline-flex"><?php echo $jen_su; ?></h2></div>
												<div class="ml-auto p-2"><h5 class="text-secondary text-right d-inline-flex"><?php echo $tgl_aju ?></h5></div>
											</div>
										</th>
									</tr>
									</thead>
						<!-- bagian nama dan alamat mitra -->
									<tr>
										<!-- <th scope="col"></th> -->
										<td class="pl-5">
												<label class="border-secondary pl-1"><span class="text-secondary">Nama Mitra : </span><?php echo $nama ?></label>
												<p><span class="text-secondary">Alamat Mitra : </span><?php echo $alamat ?></p>

												<div class="text-right mr-5 mt-4">

												<a href='#detail_modal' class='detail' id='<?php echo $data['ID_BANK']; ?>' data-toggle='modal'>
													<button type="button" class="btn btn-primary">
													lihat detail...
													</button>
												</a>   

												</div>
										</td>
										</tr>
									</table>
					<?php endforeach; 
				}else{ //jika database kosong
					?>
						<table class="table table-bordered table-primary">
									<thead>
										<tr class="text-center">
										<th scope="col"><h6 class="text-secondary">Surat Tidak Tersedia</h6></th>
										</tr>
									</thead>
									</table>
					<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script> -->
	<script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
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
<!-- modal login -->

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
<!-- modal keluar -->


<!-- untuk tampilkan modal daftar -->
	<script>
		var button = document.getElementById("mdtr");
		<?php if (isset($_SESSION["daftar"])) { ?>
			button.click();
		<?php } ?>
	</script>
<!-- modal daftar -->

	<!-- memulai modal nya. pada id="$myModal" harus sama dengan data-target="#myModal" pada tombol di atas -->
	<div class="modal fade" id="detail_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Data siswa</h4>
				</div>
				<!-- memulai untuk konten dinamis -->
				<!-- lihat id="data_siswa", ini yang di pangging pada ajax di bawah -->
				<div class="modal-body" id="data_siswa">
				</div>
				<!-- selesai konten dinamis -->
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
        $(document).ready(function(){
            $('.detail').click(function(){
                var id = $(this).attr('id');
					// $('#data_siswa').html('yess');
                //menggunakan fungsi ajax untuk pengambilan data
                $.ajax({
                    url : '<?php echo base_url().'assets/sub_detail.php' ?>',
                    success : function(data){
                    $('#data_siswa').html(data);//menampilkan data ke dalam modal
					$('#data_siswa').html('yess');
					console.log(data);
                    }
                });
            });
        });
    </script>

</body>

</html>