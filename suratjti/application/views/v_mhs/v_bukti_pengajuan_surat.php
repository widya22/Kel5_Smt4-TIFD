<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('assets/asetmhs/assets/img/fav.png') ?>">
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
	<link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/linearicons.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/nice-select.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/magnific-popup.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/main.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/bootstrap.min.css') ?>">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
</head>

<body>

	<div class="banner-area relative">
			<div class="row height align-items-center justify-content-center">
				<div class="col-lg-6">
					<div class="banner-content text-center">
					<!-- tabel -->
					<table class="table table-bordered shadow rounded bg-surat">
					<?php foreach($database1 as $u){ ?>
								<thead>
									<tr class="bg-blue mt-3 mb-3">
										<th scope="col" class=" d-flex justify-content-center">
										<div class="col-1">
											<img class="text-left mr-4" src="<?php echo base_url("assets/asetmhs/assets/icon/s-logo.png") ?>" alt=""  height="40px">
										</div>
										<div class="col-1"></div>
												<h3 class="text-secondary text-bold col-8 mt-2" disabled>Surat <?php echo $u->JENIS_SURAT ?></h3>
										<div class="col-1 text-right">
											<img class="" src="<?php echo base_url("assets/asetmhs/assets/icon/ti-logo.png") ?>" alt="" height="40px">
										</div>
										<div class="col-1">
											<img class="" src="<?php echo base_url("assets/asetmhs/assets/icon/polije-logo.png") ?>" alt="" height="40px">
										</div>
										</th>
									</tr>
									
									<tr>
										<th scope="col" class="pl-5 pr-3">
											<div class="ml-auto p-2"><h5 class="text-secondary text-right "><?php echo $u->TANGGAL_PENGAJUAN ?></h5></div>
										
											<p class="text-secondary text-left">detail surat :</p>
											<table class="table">
													<tbody>
														<tr>
															<td class="text-secondary">Nama Mitra</td>
															<td class="col-6"><?php echo $u->NAMA_MITRA?></td>
														</tr>
														<tr>
															<td class="text-secondary">Alamat Mitra</td>
															<td class="col-6"><?php echo $u->ALAMAT_MITRA ?></td>
														</tr>
														<tr>
															<td class="text-secondary">Tanggal Penggunaan</td>
															<td class="col-6"><?php echo $u->TANGGAL ?></td>
														</tr>
														<tr>
															<td class="text-secondary">Keterangan</td>
															<td class="col-6"><?php echo $u->KETERANGAN ?></td>
														</tr>
														<tr>
															<td class="text-secondary">Status</td>
															<td class="col-6"><?php echo $u->STATUS_SURAT ?></td>
														</tr>
													</tbody>
													</table>
										</th>
									</tr>
								</thead>

								<?php } ?>

								<tr>
									<td class="pl-5">
											<p class="text-secondary text-left">detail pengaju :</p>
									<table class="table">
													<tbody>
								<?php foreach($database2 as $a){ ?>
														<tr>
															<td class="col-6"><?php echo $a->ANGGOTA_MHS ?></td>
															<td class="col-6"><?php echo $a->NIM_ANGGOTA ?></td>
														</tr>
								<?php } ?>
													</tbody>
													</table>
									</td>
								</tr>
								</table>
								
					</div>
				</div>
			</div>
	</div>

	<script src="<?php echo base_url('assets/asetmhs/assets/js/vendor/bootstrap.min.js') ?>"></script>
	<script>
		window.print();
	</script>

</body>

</html>
