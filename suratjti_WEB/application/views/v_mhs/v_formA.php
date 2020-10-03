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
                                        <form role="form" action="<?= base_url() ?>mhs/formA/tambahsurat" method="post">
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
                                                <div class="form-group row">
                                                    <label class="col-md-3 ml-4">NIM Pengaju</label>
                                                    <input type="text" name="NIM_U" placeholder="NIM" class="form-control col-md-8 mr-2">
                                                </div>
                                                <div class="form-group row text-center">
                                                    <label class="col-md-3 ml-4"></label>
                                                    <label class="col-md-8 ml-4 mt-2"><b>Data Anggota Kelompok</b></label>
                                                </div>
                                                <b>Anggota ke-1</b>
                                                <br>
                                                <div class="form-group row">
                                                    <label class="col-md-3 ml-4">NIM</label></br>
                                                    
                                                    
                                                    
                                                    <input type="text"  name="nim[]"  class="form-control col-md-8 mr-2 mb-2"></br>
                                                    <label class="col-md-3 ml-4">Nama</label></br>
                                                    <input type="text" y name="nama[]"  class="form-control col-md-8 mr-2 mb-2"></br>
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