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
                            <form role="form" action="<?= base_url() ?>form2/tambahsurat" method="post">
                                <div class="card-body">
                                    <?php date_default_timezone_set('Asia/Jakarta'); ?>
                                    <?php
                                    $tanggal = date("Y-m-d H:i:s");
                                    $id_surat = date("Y-m-d H:i:s");
                                    ?>
                                    <input type="hidden" name="ID_SURAT" value="<?= $id_surat ?>">
                                    <input type="hidden" name="TANGGAL" value="<?= $tanggal ?>">
                                    <input type="hidden" name="STATUS_SURAT" value="Menunggu">
                                    <input type="hidden" name="TRAKING_SURAT" value="Menunggu Dosen">
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
                                        <label class="col-md-3 ml-4">NIM Pengaju</label>
                                        <?php
                                        if (isset($_SESSION["status"])) {
                                            $nim = $_SESSION['nim'];
                                        } ?>
                                        <input readonly type="text" class="form-control col-md-8 mr-2" name="NIM_U" value="<?= $nim ?>">
                                        <input type="hidden" name="NAMA_USER" value="<?= $nama_user ?>">
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
                                    <div class="form-group row">
                                        <label class="col-md-3 ml-4">Data Anggota Mahasiswa</label>
                                        <div class="col-md-3 ml-4">
                                            <button type="button" id="btn-tambah-form" class="btn btn-primary">Tambah Data Form</button>
                                            <br>
                                            <b>Data ke 1 :</b>
                                            <table>
                                                <tr>
                                                    <td>NIM</td>
                                                    <td><input type="text" name="nim[]" required></td>
                                                </tr>
                                                <tr>
                                                    <td>NAMA</td>
                                                    <td><input type="text" name="nama[]" required></td>
                                                </tr>
                                            </table>
                                            <br><br>
                                            <div id="insert-form"></div>
                                            <button type="button" id="btn-reset-form" class="btn btn-secondary">Reset Form</button><br><br>
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

    <input type="hidden" id="jumlah-form" value="1">

    <script>
        $(document).ready(function() { // Ketika halaman sudah diload dan siap
            $("#btn-tambah-form").click(function() { // Ketika tombol Tambah Data Form di klik
                var jumlah = parseInt($("#jumlah-form").val()); // Ambil jumlah data form pada textbox jumlah-form
                var nextform = jumlah + 1; // Tambah 1 untuk jumlah form nya

                // Kita akan menambahkan form dengan menggunakan append
                // pada sebuah tag div yg kita beri id insert-form
                $("#insert-form").append("<b>Data ke " + nextform + " :</b>" +
                    "<table>" +
                    "<tr>" +
                    "<td>NIM</td>" +
                    "<td><input type='text' name='nim[]' required></td>" +
                    "</tr>" +
                    "<tr>" +
                    "<td>Nama</td>" +
                    "<td><input type='text' name='nama[]' required></td>" +
                    "</tr>" +
                    "</table>" +
                    "<br><br>");
                $("#jumlah-form").val(nextform); // Ubah value textbox jumlah-form dengan variabel nextform
            });

            // Buat fungsi untuk mereset form ke semula
            $("#btn-reset-form").click(function() {
                $("#insert-form").html(""); // Kita kosongkan isi dari div insert-form
                $("#jumlah-form").val("1"); // Ubah kembali value jumlah form menjadi 1
            });
        });
    </script>