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
  <script src="<?php echo base_url("js/jquery.min.js"); ?>" type="text/javascript"></script>


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
                <a class="nav-link ml-2 mr-2" href="<?= base_url('mhs/home') ?>">Beranda</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-2 mr-2" href="<?= base_url('mhs/home/surat_saya') ?>">Surat Saya</a>
              </li>
              <li class="nav-item">
                <a class="nav-link ml-2 mr-2" href="<?php echo base_url('mhs/form') ?>">Formulir Surat</a>
              </li>
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
                  <a class="dropdown-item" data-toggle="modal" data-target="#logoutModal">Keluar</a>
                </div>

              <?php } else { ?>
                <a href="#" data-toggle="modal" class="nav-link" aria-haspopup="true" aria-expanded="false" data-target="#modalLogin">Masuk</a>
              <?php } ?>
            </li>
          </div>
        </nav>
      </header>
      <div class="banner-area relative">
        <div class="overlay hero-overlay-bg"></div>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <div class="container-fluid">

            </div><!-- /.container-fluid -->
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="container-fluid">
              <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                  <!-- general form elements -->
                  <div class="">
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="<?= base_url() ?>mhs/form/tambahsurat" method="post">
                      <div class="card-body">
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <?php
                        $tanggal = date("Y-m-d H:i:s");
                        $id_surat = date("Y-m-d H:i:s");
                        ?>
                        <input type="hidden" name="ID_SURAT" value="<?= $id_surat ?>">
                        <input type="hidden" name="TANGGAL" value="<?= $tanggal ?>">
                        <input type="hidden" name="STATUS_SURAT" value="Menunggu">
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Jenis Surat</label>
                          <select class="custom-select col-md-8 mr-2" name="ID_JS">
                            <option selected disabled>Pilih Jenis Surat</option>
                            <?php
                            $no = 1;
                            foreach ($jenis_surat as $j) :
                            ?>
                              <option value="<?= $j->ID_JENIS_SURAT ?>"><?= $j->JENIS_SURAT ?></option>
                              <?php $no++ ?>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Nama Dosen</label>
                          <select class="custom-select col-md-8 mr-2" name="NIP">
                            <option selected disabled>Pilih Nama Dosen</option>
                            <?php
                            $no1 = 1;
                            foreach ($dosen as $d) :
                            ?>
                              <option value="<?= $d->NIP ?>"><?= $d->NAMA_DOSEN ?></option>
                              <?php $no1++ ?>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Kepada</label>
                          <input type="text" name="NAMA_MITRA" placeholder="Nama Instansi / Mitra" class="form-control col-md-8 mr-2">
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Tanggal Survei</label>
                          <input type="date" name="TANGGAL_PENGAJUAN" class="form-control col-md-8 mr-2">
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Alamat </label>
                          <textarea name="ALAMAT_MITRA" class="form-control col-md-8 mr-2"></textarea>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Keterangan </label>
                          <textarea name="KETERANGAN" class="form-control col-md-8 mr-2"></textarea>
                        </div>
                        <div class="form-group row text-center">
                          <label class="col-md-3 ml-4"></label>
                          <label class="col-md-8 ml-4 mt-2"><b>Data Anggota Kelompok</b></label>
                        </div>
                        <b>Anggota ke-1</b>
                        <br>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">NIM</label>
                          <?php
                          if (isset($_SESSION["status"])) {
                            $nim = $_SESSION['nim'];
                          } ?>
                          <input type="hidden" name="NIM_U" value="<?= $nim ?>">
                          <input type="text" readonly name="nim[]" value="<?= $nim ?>" class="form-control col-md-8 mr-2 mb-2">
                          <label class="col-md-3 ml-4">Nama</label>
                          <input type="text" readonly name="nama[]" value="<?= $nama_user ?>" class="form-control col-md-8 mr-2 mb-2">
                        </div>
                        <div id="insert-form"></div>
                        <label class="col-md-3 ml-4"></label>
                        <button type="button" id="btn-tambah-form" class="btn btn-primary">Tambah Data</button>
                        <button type="button" id="btn-reset-form" class="btn btn-secondary">Reset Form</button>
                      </div>
                      <br>
                      <hr>
                      <div class="form-group row justify-content-center">
                        <button type="submit" class="btn btn-primary">Ajukan Surat</button>
                      </div>
                      <!-- /.card-body -->
                    </form>
                  </div>
                  <!-- /.row -->
                </div><!-- /.container-fluid -->
          </section>
          <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

      </div>
    </div>
  </div>
  <div class="main-wrapper">

    <!-- End feature-bottom Area -->

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
  <script src="<?php echo base_url('assets/asetmhs/assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/vendor/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/jquery.ajaxchimp.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/jquery.nice-select.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/jquery.magnific-popup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/js/waypoints.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/jquery.counterup.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/main.js') ?>"></script>
  <script src="<?php echo base_url('assets/asetmhs/assets/js/bootstrap.min.js') ?>"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->

  <!--Logout Modal-->
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <input type="hidden" id="jumlah-form" value="1">

  <script>
    $(document).ready(function() { // Ketika halaman sudah diload dan siap
      $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
        var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
        var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

        // Kita akan menambahkan form dengan menggunakan append
        // pada sebuah tag div yg kita beri id insert-form
        if (nextform <= 6) {
          $("#insert-form").append(
            "<b>Anggota ke-" + nextform + "</b>" +
            "<div class='form-group row'>" +
            "<label class='col-md-3 ml-4'> NIM </label>" +
            "<input type='text' name = 'nim[]' class='form-control col-md-8 mr-2 mb-2'>" +
            "<label class='col-md-3 ml-4'> Nama </label>" +
            "<input type='text' name = 'nama[]' class='form-control col-md-8 mr-2 mb-2'>" +
            "</div>"
          );
          $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
        } else {
          "<div class = 'alert alert-danger'role = 'alert' >" +
          "This is a danger alert— check it out!" +
          "</div>"
        }

      });

      // Buat fungsi untuk mereset form ke semula
      $("#btn-reset-form").click(function() {
        $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
        $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
      });
    });
  </script>

</body>

</html>