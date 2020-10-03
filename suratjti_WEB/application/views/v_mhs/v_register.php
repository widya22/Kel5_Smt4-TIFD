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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css') ?>">
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
    <script src="<?php echo base_url('assets/asetmhs/assets/js/main.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <!-- alert jika nim sama atau password tidak sama -->

    <?php
    if (isset($_SESSION["sama_nim"])) { ?>
        <div class="alert alert-info alert-dismissible fade show">
            <i class="fa fa-check-circle text-success"></i>
            NIM yang anda masukkan telah Terdaftar, tolong daftarkan NIM asli anda sendiri
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php }

    if (isset($_SESSION["sama_password"])) { //tinggal cara hilangkan session 
    ?>
        <div class="alert alert-warning alert-dismissible fade show">
            <i class="fa fa-check-circle text-success"></i>
            Password yang anda masukkan tidak sama, tolong periksa kembali password dan konfirmasi password anda
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php } ?>
    <!-- alert jika nim sama atau password tidak sama -->

    <!-- modal Register -->
    <div class="modal-dialog pt-60" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Buat akun JTI-Surat</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?php echo base_url().'mhs/crud/register'; ?>" method="post" class="form">
                    <div class="form-group">
                        <!-- <label for="username">NIM</label> -->
                        <div class="input-group "> 
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">E</span>
                            </div>
                            <input type="text" name="nim" id="nim" placeholder="Masukkan NIM" class="form-control" required onkeypress="return hanyaAngka(event)" maxlength="8" value="<?php if (isset($_SESSION['nim_reload'])) {
                                                                                                                                                                                            echo $_SESSION["nim_reload"];
                                                                                                                                                                                        } ?>" /> <!-- isi input otomatis */ -->
                        </div>
                        <div id="result" class="font-italic"></div>
                    </div>

                    <div class="form-group">
                        <!-- <label for="username">Nama Lengkap</label> -->
                        <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" class="form-control" required minlength="5" 
                        value="<?php if (isset($_SESSION['nama'])) {
                                    echo $_SESSION["nama"];
                                } ?>" /> <!-- isi input otomatis -->
                                
                    </div>
                    <div class="form-group border rounded">
                        <!-- <label for="username">Prodi :</label><br> -->
                        <p class="text-center">pilih prodi anda</p>
                        <div class="text-center">
                            <div class="form-check form-check-inline" required>
                                <input class="form-check-input" type="radio" name="prodi" id="tif" value="TIF" required>
                                <label class="form-check-label" for="tif">
                                    TIF
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prodi" id="mif" value="MIF" required>
                                <label class="form-check-label" for="mif">
                                    MIF
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prodi" id="tkk" value="TKK" required>
                                <label class="form-check-label" for="tkk">
                                    TKK
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <!-- <label for="username">NIM</label> -->
                        <div class="input-group "> 
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">+62</span>
                            </div>
                            <input type="text" name="no_hp" placeholder="Masukkan No HP" class="form-control" required onkeypress="return hanyaAngka(event)" minlength="10" maxlength="12"/> <!-- isi input otomatis */ -->
                        </div>
                        <div id="result" class="font-italic"></div>
                    </div>

                    <div class="form-group">
                        <!-- <label for="password">Kata Sandi</label> -->
                        <input type="password" name="sandi" placeholder="Kata Sandi" class="form-control" required minlength="8" value="<?php if (isset($_SESSION['sandi'])) {
                                                                                                                                            echo $_SESSION["sandi"];
                                                                                                                                        } ?>" />
                        <p class="font-italic">*gunakan minimal 8 karakter dengan campuran huruf, angka dan simbol</p>
                    </div>
                    <div class="form-group">
                        <!-- <label for="password">Konfirmasi Kata Sandi</label> -->
                        <input type="password" name="k_sandi" placeholder="Konfirmasi Kata Sandi" class="form-control" required minlength="8" value="<?php if (isset($_SESSION['k_sandi'])) {
                                                                                                                                                            echo $_SESSION["k_sandi"];
                                                                                                                                                        } ?>" />
                        <p class="font-italic">*silahkan ketik ulang password anda</p>
                    </div>
                    <a href="<?php echo base_url(); ?>" class="text-center ml-2">kembali ke beranda?</a>
                    <div class="text-right">
                        <button class="btn btn-primary" type="submit" onclick="return confirm('Pastikan data anda sudah diisi dengan benar!')">Berikutnya</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- modal -->
</body>

<!-- Script hanya angka di sebelah kirim NIM  -->
<script>
    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $('.form').submit(function() {
            var nim = $('#nim').val();
            var e = "E";
            var enim = e + nim;

            <?php
            echo 'enim';
            $where = array(
                'NIM' => $enim,
            );
            $cek = $this->m_login->cek_login("user", $where)->num_rows();
            ?>
            var cek = <?php $cek; ?>;

            if (cek == 0) {
                $("#result").text(enim);
                return false;
            }
            return false;
            $("#result").text(enim);
        });
    });
</script>

<!-- script untuk ceck database -->
<!-- <script type="text/javascript">
	$(document).ready(function() {
		$('#nim').keyup(function() {
			var unim = $('#nim').val();
            var e = "E";
            var unim2 = e + unim;
			if(unim == 0) {
				$('#result').text('');
			}
			else {
						if(0 > 0) {
							$('#result').text('Username tidak tersedia');
						}
						else {
							$('#result').text('Username tersedia');
						}
			}
		});
	});
</script> -->

</html>