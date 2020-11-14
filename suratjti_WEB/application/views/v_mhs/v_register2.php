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
    <link rel="stylesheet" href="<?php echo base_url('assets/asetmhs/assets/css/bootstrap.min.css') ?>">
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
	</head>
	<body>
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

            <!-- modal Register -->
            <div class="modal-dialog pt-60" role="document">
                <div class="modal-content">
                <div class="modal-header justify-content-center">
                <h5 class="modal-title ">Selamat, anda sudah terdaftar di JTI-Surat</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url().'mhs/login/home_regis'; ?>" method="post">
                    <div class="text-center">
                    <input type="hidden" name="NIM2" value="<?php echo $_SESSION["nim"] ?>">
                   <button class="btn btn-outline-primary rounded-pill" disabled>@<?= $_SESSION["nim"] ?> - <?= $_SESSION["nama_mhs"] ?></button>
                   </div>
                   <div>
                   <h3 class="text-center mt-3">Informasi</h3>
                   <ul type="circle" class="list-group">
                        <li class="list-group-item"><strong>Saat anda membuat akun JTI-Surat,</strong> kami menyimpan informasi yang diberikan, seperti Nama, NIM, Prodi dan 
                        Password</li>
                        <li class="list-group-item"><strong>Saat ini akun anda sudah terdaftar di database kami,</strong> jika anda melakukan pendaftaran untuk yang kedua kali
                        dengan data yang sama, maka proses pendaftaran akan gagal</li>
                        <li class="list-group-item"><strong>Saat anda memiliki akun JTI-Surat terdaftar</strong> maka anda dapat melakukan transaksi pengajuan surat kepada
                        Admin Jurusan Teknologi Informasi</li>
                        <li class="list-group-item"><strong>Jika terdapat kesalahan penginputan data</strong> kepada website JTI-Surat, maka data anda dapat mengubahnya
                        di menu ubah akun nanti</li>
                        <li class="list-group-item">Sekian informasi yang kami sampaikan, <strong>Terimakasih</strong> dan <strong>semoga hari anda menyenangkan</strong></li>
                   </ul>
                   </div>
                   <div class="text-right mt-4">
                        <button class="btn btn-primary" type="submit">Berikutnya</button>
                    </div>
                    </form>
            </div>
<!-- modal -->
	</body>
</html>
