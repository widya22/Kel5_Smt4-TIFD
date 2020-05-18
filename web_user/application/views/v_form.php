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
              if (isset($_SESSION["status"])) {
                $nama = $_SESSION['nama'];
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
                <a href="#" data-toggle="modal" class="nav-link" aria-haspopup="true" aria-expanded="false" data-target="#modalLogin">Masuk/Daftar</a>
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
                    <div class="card-header mt-2">
                      <h3 class="card-title ">Formulir Pengajuan Surat</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="<?= base_url() ?>form/tambahsurat" method="post">
                      <div class="card-body">
                        <?php date_default_timezone_set('Asia/Jakarta'); ?>
                        <input type="hidden" readonly name="TANGGAL" value="<?= date("Y-m-d"); ?>">
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
                          <label class="col-md-3 ml-4">Jenis Surat</label>
                          <select class="custom-select col-md-8 mr-2" name="ID_JENIS_SURAT">
                            <option selected disabled>Pilih Jenis Surat</option>
                            <?php
                            $no2 = 1;
                            foreach ($jenis as $js) :
                            ?> <option value="<?= $js->ID_JENIS_SURAT ?>"><?= $js->JENIS_SURAT ?></option>
                              <?php $no2++ ?>
                            <?php endforeach ?>
                          </select>
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">NIM Pengaju</label>
                          <?php
                          if (isset($_SESSION["status"])) {
                            $nim = $_SESSION['nim'];
                          } ?>
                          <input readonly type="text" class="form-control col-md-8 mr-2" name="NIM" value="<?= $nim ?>">
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Kepada</label>
                          <input type="text" name="NAMA_MITRA" placeholder="Nama Instansi / Mitra" class="form-control col-md-8 mr-2">
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Alamat </label>
                          <input type="text" name="ALAMAT_MITRA" placeholder="Alamat Instansi / Mitra" class="form-control col-md-8 mr-2">
                        </div>
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Tanggal Survei</label>
                          <input type="date" name="TANGGAL_PENGAJUAN" class="form-control col-md-8 mr-2">
                        </div>
                        <input type="hidden" name="STATUS" value="Menunggu">
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">No HP Mahasiswa</label>
                          <input type="text" placeholder="No HP Mahasiswa Pengaju" class="form-control col-md-8 mr-2">
                        </div>
                        <input type="hidden" name="STATUS_SURAT" value="0">
                        <input type="hidden" name="TRAKING_SURAT" value="Menunggu Dosen">
                        <div class="form-group row">
                          <label class="col-md-3 ml-4">Data Mahasiswa Anggota</label>
                          <div>
                            <div class="form-group fieldGroup">
                              <div class="input-group">
                                <input type="text" name="NIM_ANGGOTA" class="form-control" placeholder="NIM Mahasiswa" />
                                <input type="text" name="ANGGOTA_MHS" class="form-control" placeholder="Nama Mahasiswa" />
                                <div class="input-group-addon ml-3">
                                  <a href="javascript:void(0)" class="btn btn-success addMore"><i class="fa fa-plus"></i></a>
                                </div>
                              </div>
                            </div>

                            <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Simpan Data Anggota" />
                            <div class="form-group fieldGroupCopy" style="display: none;">
                              <div class="input-group">
                                <input type="text" name="NIM_ANGGOTA" class="form-control" placeholder="NIM Mahasiswa" />
                                <input type="text" name="ANGGOTA_MHS" class="form-control" placeholder="Nama Mahasiswa" />
                                <div class="input-group-addon ml-3">
                                  <a href="javascript:void(0)" class="btn btn-danger remove"><i class="fa fa-trash"></i></a>
                                </div>
                              </div>
                            </div>
                            <br>
                          </div>
                        </div>
                        <br>
                        <div class="form-group row">
                          <label class="col-md-3 my-2"></label>
                          <button type="submit" class="btn btn-primary ml-4">Ajukan Surat</button>
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

  <!-- Modal -->
  <!-- <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="card-body">
              <div class="form-group row">
                <label class="col-md-3 ml-4">Nama</label>
                <input type="text" class="form-control col-md-8 mr-2">
              </div>
              <div class="form-group row">
                <label class="col-md-3 ml-4">NIM</label>
                <input type="text" class="form-control col-md-8 mr-2">
              </div>
              <div class="form-group row">
                <label class="col-md-3 ml-4">HP</label>
                <input type="text" class="form-control col-md-8 mr-2">
              </div>
              <div class="form-group row">
                <label class="col-md-3 my-2"></label>
                <button class="btn btn-primary ml-4">Simpan</button>
                <button class="btn btn-danger ml-2">Batal</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->

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
          <a class="btn btn-primary" href="<?= base_url('login/logout'); ?>">Keluar</a>
        </div>
      </div>
    </div>
  </div>

</body>

<script>
  $(function() {
    $('#addmaha').click(function(e) {
      e.preventDefault();
      $('#exampleModal').modal({
        backdrop: 'static',
        show: true
      });
    });
  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function() {
    // membatasi jumlah inputan
    var maxGroup = 10;

    //melakukan proses multiple input 
    $(".addMore").click(function() {
      if ($('body').find('.fieldGroup').length < maxGroup) {
        var fieldHTML = '<div class="form-group fieldGroup">' + $(".fieldGroupCopy").html() + '</div>';
        $('body').find('.fieldGroup:last').after(fieldHTML);
      } else {
        alert('Maximum ' + maxGroup + ' groups are allowed.');
      }
    });

    //remove fields group
    $("body").on("click", ".remove", function() {
      $(this).parents(".fieldGroup").remove();
    });
  });
</script>

<?php
if (isset($_POST['submit'])) {
  $nama = $_POST['ANGGOTA_MHS'];
  $nim = $_POST['NIM_ANGGOTA'];
  if (!empty($nama)) {
    for ($a = 0; $a < count($nama); $a++) {
      if (!empty($nama[$a])) {
        $nama = $nama[$a];
        $nim = $nim[$a];

        //membuat insert data sementara
        echo 'Data ke -' . ($a + 1) . '=> Nama: ' . $nama . '; NIM: ' . $nim . '</br>';
      }
    }
  }
}
?>

</html>