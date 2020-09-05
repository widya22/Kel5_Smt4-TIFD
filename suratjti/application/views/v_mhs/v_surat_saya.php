<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_mhs.png') ?>">
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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>"> -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/asetmhs/assets/css/jquery.dataTables.css'?>">
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

<!-- alert surat baru -->
	<?php  
	if(isset($_SESSION['surat_baru'])){ ?>
	<div class="alert alert-info alert-dismissible fade show">
		<i class="fa fa-check-circle text-success"></i>
			Surat Baru Berhasil Diajukan.
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<?php } ?>
	<?php 
	$this->session->unset_userdata('surat_baru');
	?>
<!-- alert surat baru -->

	<div class="main-wrapper-first pb-5">
		<div class="hero-area relative">
<!-- header -->
			<header>
				<na class="row navbar navbar-expand-sm navbar-light bg-light col-lg-13">
					<i class="fa fa-envelope fa-2x"></i>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav mr-auto">
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2 border-left border-right" href="<?php echo base_url('mhs/home') ?>">Beranda</a>
							</li>
							<li class="nav-item">
								<a class="nav-link ml-2 mr-2 border-left border-right" href="#">Surat Saya</a>
							</li>

						</ul>
						<li class="nav-item dropdown list-unstyled border border-primary text primary">

							<?php
							if (isset($_SESSION["status_mhs"])) {
								$nama = $_SESSION['hasil_db'];
								foreach ($nama as $u) {
									$nama_user = $u->NAMA_MHS;
								}
							?>
								<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									User : @<?php echo $nama_user ?>
								</a>
								<div class="dropdown-menu float-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item text-center keluar" data-toggle="modal" href="<?php echo base_url("mhs/login/logout") ?>">
									Keluar<i class="fa fa-sign-out pl-2"></i></a>
								</div>

							<?php } else {
								redirect('mhs/home', 'location');
							} ?>
						</li>
					</div>
					</nav>
			</header>

		
<!-- header -->

			<div class="banner-area relative pb-5 border-top  border-secondary">
				<div class="bg-light"></div>
				<div class="row justify-content-center bg-light  pl-5 pr-5 pb-2 ">
					<h1 class="text-uppercase text-orange mt-4 pl-2 pr-2 border text-center"><span> Surat Saya </span></h1>
				</div>

<!-- status -->
				<div class="row  bg-light pl-5 pr-5">
					<div class="mb-2 modal-body border shadow-sm text-center">
					<form method="post" class="text-center">
							<a href="<?php echo base_url()."mhs/home/surat_saya" ?>" class="btn mb-1 rounded-pill
								<?php if(isset($_SESSION["semua"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>" flex-wrap>Semua</a>

							<a href="<?php echo base_url()."mhs/home/surat_diproses" ?>" class="btn mb-1  rounded-pill
								<?php if(isset($_SESSION["diproses"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Diproses</a>

							<a href="<?php echo base_url()."mhs/home/surat_diambil" ?>" class="btn mb-1 rounded-pill
								<?php if(isset($_SESSION["diambil"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Bisa Diambil</a>

							<a href="<?php echo base_url()."mhs/home/surat_selesai" ?>" class="btn mb-1  rounded-pill
								<?php if(isset($_SESSION["selesai"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Selesai</a>

							<a href="<?php echo base_url()."mhs/home/surat_gagal" ?>" class="btn mb-1  rounded-pill
								<?php if(isset($_SESSION["gagal"])){?> btn-primary<?php } else {?>btn-outline-primary<?php }?>">Gagal</a>
						</form>
					</div>
				</div>
<!-- status -->

					<div class="row justify-content-center bg-light pl-5 pr-5 pb-5" id="show_data">
							<!-- untuk menampilkan data surat saya -->
					</div>
			</div>
		</div>
	</div>

<!-- MODAL Detail -->
	<div class="modal fade" id="ModalDetail" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-blue">
                <h5 class="modal-title text-left ml-3" id="myModalLabel">Detail Pengaju</h5>
                <button type="button" class="close text-right" data-dismiss="modal" aria-hidden="true">
					<i class="fa fa-times-circle text-dark"></i>
				</button>
            </div>
			<form action="<?php echo base_url("mhs/home/cetak_bukti") ?>" method="post">
			<div class="modal-body ml-3 mr-3">
					<table class="table table-bordered">
					<thead>
						<tr>
						<th scope="col">No</th>
						<th scope="col">Mahasiswa</th>
						<th scope="col">NIM</th>
						</tr>
					</thead>
					<tbody id="data">
						<!-- menampilkan detail dari ajax -->
					</tbody>
					</table>
			</div>
			<div class="text-center">
					<button type="submit" class="btn btn-outline-primary ">cetak bukti pembuatan surat
					<i class="fa fa-2x fa-print text-primary ml-2"></i>
					</button>
			</div>
			</form>

			<div class="modal-footer text-right mr-3">
			</div>
            </div>
            </div>
        </div>
<!--END MODAL Detail-->

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
					<a class="btn btn-primary" href="<?= base_url('mhs/login/logout'); ?>">Keluar</a>
				</div>
			</div>
		</div>
	</div>
<!-- modal keluar -->

	<script>
	$(document).ready(function(){
		$('#keluar').on(click,function(){
			$('#ModalDetail').modal('show');
		});
	});
		</script>
<script type="text/javascript" src="<?php echo base_url().'assets/asetmhs/assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/asetmhs/assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/asetmhs/assets/js/jquery.dataTables.js'?>"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


<script type="text/javascript">

	$(document).ready(function(){

// function if else
		<?php
		if(isset($_SESSION["semua"])){ ?> //menampilkan semua surat
			tampil_data_surat();
			$('#mydata').dataTable();
		<?php }else if(isset($_SESSION["diproses"])){ ?> //menampilkan surat diproses
			tampil_data_diproses();
			$('#mydata').dataTable();
		<?php }else if(isset($_SESSION['diambil'])) { ?> //menampilkan surat diambil
			tampil_data_diambil();
			$('#mydata').dataTable();
		<?php }else if(isset($_SESSION['selesai'])) { ?> //menampilkan surat selesai
			tampil_data_selesai();
			$('#mydata').dataTable();
		<?php }else if(isset($_SESSION['gagal'])) { ?> //menampilkan surat gagal
			tampil_data_gagal();
			$('#mydata').dataTable();
		<?php } else { ?> //menampilkan semua surat
			tampil_data_surat();
			$('#mydata').dataTable();
		<?php } ?>
// function if else


//fungsi tampil semua
		function tampil_data_surat(){  
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>mhs/home/tampil_semua',
		        async : true,
		        dataType : 'json',
		        success : function(data){

					if( data ==""){ 
						$('#show_data').html(`
						<table class="table table-bordered shadow rounded bg-surat">
								<thead>
									<tr class="bg-blue">
										<th scope="col" class="pl-5 text-center">
											<h5 class="text-secondary text-italic" disabled>Surat Tidak Ditemukan </h5>
										</th>
									</tr>
								</thead>
								
								`);
					} else {

		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<table class="table table-bordered shadow rounded bg-surat">'+
								'<thead>'+
									'<tr class="bg-blue">'+
										'<th scope="col" class="pl-5 text-center">'+
											'<h5 class="text-secondary text-italic" disabled>Surat '+data[i].STATUS_SURAT+'</h5>'+
										'</th>'+
									'</tr>'+
									
									'<tr>'+
										'<th scope="col" class="pl-5 pr-3">'+
											'<div class="d-flex">'+
												'<div class="p-2"><h2 class="d-inline-flex">'+data[i].JENIS_SURAT+'</h2></div>'+
												'<div class="ml-auto p-2"><h5 class="text-secondary text-right d-inline-flex">'+data[i].TANGGAL_PENGAJUAN+'</h5></div>'+
											'</div>'+
										'</th>'+
									'</tr>'+
								'</thead>'+

								'<tr>'+
									'<td class="pl-5">'+
										'<label class="border-secondary pl-1"><span class="text-secondary">Nama Mitra : </span>'+data[i].NAMA_MITRA+'</label>'+
										'<p><span class="text-secondary">Alamat Mitra : </span>'+data[i].ALAMAT_MITRA+'</p>'+
										'<div class="text-right mr-5 mt-4">'+
										'<a href="javascript:;" class="item_edit mr-4 btn" data="'+data[i].ID_SURAT+'">Lihat Detail...</a>'+' '+
										'</div>'+
									'</td>'+
								'</tr>'+
								'</table>'
								
								;
		            }}
		            $('#show_data').html(html);
		        }

		    });
		}
//fungsi tampil semua

//fungsi tampil diproses
	function tampil_data_diproses(){  
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>mhs/home/tampil_diproses',
		        async : true,
		        dataType : 'json',
		        success : function(data){

					if( data ==""){ 
						$('#show_data').html(`
						<table class="table table-bordered shadow rounded bg-surat">
								<thead>
									<tr class="bg-blue">
										<th scope="col" class="pl-5 text-center">
											<h5 class="text-secondary text-italic" disabled>Surat Tidak Ditemukan </h5>
										</th>
									</tr>
								</thead>
								
								`);
					} else {

		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<table class="table table-bordered shadow rounded bg-surat">'+
								'<thead>'+
									'<tr class="bg-blue">'+
										'<th scope="col" class="pl-5 text-center">'+
											'<h5 class="text-secondary text-italic" disabled>Surat '+data[i].STATUS_SURAT+'</h5>'+
										'</th>'+
									'</tr>'+
									
									'<tr>'+
										'<th scope="col" class="pl-5 pr-3">'+
											'<div class="d-flex">'+
												'<div class="p-2"><h2 class="d-inline-flex">'+data[i].JENIS_SURAT+'</h2></div>'+
												'<div class="ml-auto p-2"><h5 class="text-secondary text-right d-inline-flex">'+data[i].TANGGAL_PENGAJUAN+'</h5></div>'+
											'</div>'+
										'</th>'+
									'</tr>'+
								'</thead>'+

								'<tr>'+
									'<td class="pl-5">'+
										'<label class="border-secondary pl-1"><span class="text-secondary">Nama Mitra : </span>'+data[i].NAMA_MITRA+'</label>'+
										'<p><span class="text-secondary">Alamat Mitra : </span>'+data[i].ALAMAT_MITRA+'</p>'+
										'<div class="text-right mr-5 mt-4">'+
										'<a href="javascript:;" class="item_edit mr-4 btn" data="'+data[i].ID_SURAT+'">Lihat Detail...</a>'+' '+
										'</div>'+
									'</td>'+
								'</tr>'+
								'</table>'
								
								;
		            }
		            $('#show_data').html(html);
		        } 
				}

		    });
		}
//fungsi tampil diproses

//fungsi tampil bisadiambil
	function tampil_data_diambil(){
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>mhs/home/tampil_diambil',
		        async : true,
		        dataType : 'json',
		        success : function(data){

					if( data ==""){ 
						$('#show_data').html(`
						<table class="table table-bordered shadow rounded bg-surat">
								<thead>
									<tr class="bg-blue">
										<th scope="col" class="pl-5 text-center">
											<h5 class="text-secondary text-italic" disabled>Surat Tidak Ditemukan </h5>
										</th>
									</tr>
								</thead>
								
								`);
					} else {

		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<table class="table table-bordered shadow rounded bg-surat">'+
								'<thead>'+
									'<tr class="bg-blue">'+
										'<th scope="col" class="pl-5 text-center">'+
											'<h5 class="text-secondary text-italic" disabled>Surat '+data[i].STATUS_SURAT+'</h5>'+
										'</th>'+
									'</tr>'+
									
									'<tr>'+
										'<th scope="col" class="pl-5 pr-3">'+
											'<div class="d-flex">'+
												'<div class="p-2"><h2 class="d-inline-flex">'+data[i].JENIS_SURAT+'</h2></div>'+
												'<div class="ml-auto p-2"><h5 class="text-secondary text-right d-inline-flex">'+data[i].TANGGAL_PENGAJUAN+'</h5></div>'+
											'</div>'+
										'</th>'+
									'</tr>'+
								'</thead>'+

								'<tr>'+
									'<td class="pl-5">'+
										'<label class="border-secondary pl-1"><span class="text-secondary">Nama Mitra : </span>'+data[i].NAMA_MITRA+'</label>'+
										'<p><span class="text-secondary">Alamat Mitra : </span>'+data[i].ALAMAT_MITRA+'</p>'+
										'<div class="text-right mr-5 mt-4">'+
										'<a href="javascript:;" class="item_edit mr-4 btn" data="'+data[i].ID_SURAT+'">Lihat Detail...</a>'+' '+
										'</div>'+
									'</td>'+
								'</tr>'+
								'</table>'
								
								;
		            }}
		            $('#show_data').html(html);
		        }

		    });
		}
//fungsi tampil bisadiambil

//fungsi tampil selesai
	function tampil_data_selesai(){
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>mhs/home/tampil_selesai',
		        async : true,
		        dataType : 'json',
		        success : function(data){

					if( data ==""){ 
						$('#show_data').html(`
						<table class="table table-bordered shadow rounded bg-surat">
								<thead>
									<tr class="bg-blue">
										<th scope="col" class="pl-5 text-center">
											<h5 class="text-secondary text-italic" disabled>Surat Tidak Ditemukan </h5>
										</th>
									</tr>
								</thead>
								
								`);
					} else {

		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<table class="table table-bordered shadow rounded bg-surat">'+
								'<thead>'+
									'<tr class="bg-blue">'+
										'<th scope="col" class="pl-5 text-center">'+
											'<h5 class="text-secondary text-italic" disabled>Surat '+data[i].STATUS_SURAT+'</h5>'+
										'</th>'+
									'</tr>'+
									
									'<tr>'+
										'<th scope="col" class="pl-5 pr-3">'+
											'<div class="d-flex">'+
												'<div class="p-2"><h2 class="d-inline-flex">'+data[i].JENIS_SURAT+'</h2></div>'+
												'<div class="ml-auto p-2"><h5 class="text-secondary text-right d-inline-flex">'+data[i].TANGGAL_PENGAJUAN+'</h5></div>'+
											'</div>'+
										'</th>'+
									'</tr>'+
								'</thead>'+

								'<tr>'+
									'<td class="pl-5">'+
										'<label class="border-secondary pl-1"><span class="text-secondary">Nama Mitra : </span>'+data[i].NAMA_MITRA+'</label>'+
										'<p><span class="text-secondary">Alamat Mitra : </span>'+data[i].ALAMAT_MITRA+'</p>'+
										'<div class="text-right mr-5 mt-4">'+
										'<a href="javascript:;" class="item_edit mr-4 btn" data="'+data[i].ID_SURAT+'">Lihat Detail...</a>'+' '+
										'</div>'+
									'</td>'+
								'</tr>'+
								'</table>'
								
								;
		            }}
		            $('#show_data').html(html);
		        }

		    });
		}
//fungsi tampil selesai


//fungsi tampil gagal
	function tampil_data_gagal(){
		    $.ajax({
		        type  : 'GET',
		        url   : '<?php echo base_url()?>mhs/home/tampil_gagal',
		        async : true,
		        dataType : 'json',
		        success : function(data){

					if( data ==""){ 
						$('#show_data').html(`
						<table class="table table-bordered shadow rounded bg-surat">
								<thead>
									<tr class="bg-blue">
										<th scope="col" class="pl-5 text-center">
											<h5 class="text-secondary text-italic" disabled>Surat Tidak Ditemukan </h5>
										</th>
									</tr>
								</thead>
								
								`);
					} else {

		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<table class="table table-bordered shadow rounded bg-surat">'+
								'<thead>'+
									'<tr class="bg-blue">'+
										'<th scope="col" class="pl-5 text-center">'+
											'<h5 class="text-secondary text-italic" disabled>Surat '+data[i].STATUS_SURAT+'</h5>'+
										'</th>'+
									'</tr>'+
									
									'<tr>'+
										'<th scope="col" class="pl-5 pr-3">'+
											'<div class="d-flex">'+
												'<div class="p-2"><h2 class="d-inline-flex">'+data[i].JENIS_SURAT+'</h2></div>'+
												'<div class="ml-auto p-2"><h5 class="text-secondary text-right d-inline-flex">'+data[i].TANGGAL_PENGAJUAN+'</h5></div>'+
											'</div>'+
										'</th>'+
									'</tr>'+
								'</thead>'+

								'<tr>'+
									'<td class="pl-5">'+
										'<label class="border-secondary pl-1"><span class="text-secondary">Nama Mitra : </span>'+data[i].NAMA_MITRA+'</label>'+
										'<p><span class="text-secondary">Alamat Mitra : </span>'+data[i].ALAMAT_MITRA+'</p>'+
										'<div class="text-right mr-5 mt-4">'+
										'<a href="javascript:;" class="item_edit mr-4 btn" data="'+data[i].ID_SURAT+'">Lihat Detail...</a>'+' '+
										'</div>'+
									'</td>'+
								'</tr>'+
								'</table>'
								
								;
		            }}
		            $('#show_data').html(html);
		        }

		    });
		}
//fungsi tampil gagal



//GET detail
	$('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('mhs/home/get_surat_kode')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
					var hasil = '';
		            var a;
		            for(a=0; a<data.length; a++){
						var n = a+1;
		                hasil +=
						'<tr>'+
						'<th scope="row">'+n+'</th>'+
						'<td>'+data[a].ANGGOTA_MHS+'</td>'+
						'<td>'+data[a].NIM_ANGGOTA+'</td>'+
						'<td><input name="id_surat" value='+id+' hidden/></td>'+
						'</tr>'
						
						
						;
		            $('#data').html(hasil);
					$('#ModalDetail').modal('show');
					}
                }
            });
            return false;
        });
//GET detail


	});


</script>
</body>
</html>