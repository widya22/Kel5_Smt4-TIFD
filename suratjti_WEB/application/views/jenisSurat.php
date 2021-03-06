<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JTI SURAT | Jenis Surat</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url('assets/asetadmin/plugins/fontawesome-free/css/all.min.css');?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('assets/asetadmin/plugins/datatables-bs4/css/dataTables.bootstrap4.css');?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('assets/asetadmin/dist/css/adminlte.min.css');?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- favicon -->
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_admin.png') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<?php $this->load->view('sidebar_menu'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <a class="nav-link text-secondary" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          <div class="col-sm-5 ">
            <h1>Jenis Surat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Jenis Surat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- alert -->
  <?php
    if (isset($_SESSION['ubah_sukses'])){ 
      ?>
      <div class="alert alert-success alert-dismissible fade show ubah_sukses" role="alert">
        Data berhasil diubah
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <?php }
        if(isset($_SESSION['hapus_sukses'])){
      ?>
      <div class="alert alert-success alert-dismissible fade show hapus_sukses" role="alert">
        Data berhasil dihapus
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php }
        if(isset($_SESSION['hapus_gagal'])){
      ?>
      <div class="alert alert-danger alert-dismissible fade show hapus_sukses" role="alert">
        Data Gagal dihapus
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php } 
     if(isset($_SESSION['tambah_sukses'])){
      ?>
      <div class="alert alert-info alert-dismissible fade show hapus_sukses" role="alert">
        Data berhasil ditambahkan
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
        <?php } 
         if(isset($_SESSION['tambah_gagal'])){
          ?>
          <div class="alert alert-danger alert-dismissible fade show hapus_sukses" role="alert">
            Data gagal ditambahkan, ID Surat tidak boleh sama
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <?php } 
    unset($_SESSION['ubah_sukses']);
    unset($_SESSION['hapus_sukses']);
    unset($_SESSION['hapus_gagal']);
    unset($_SESSION['tambah_sukses']);
    unset($_SESSION['tambah_gagal']);
    ?>
  <!-- alert -->

    <!-- Main content -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Jenis Surat </h3>
            </div>
            <div class="container">
   
        <!-- <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Add New</a></div>        -->
    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr class="bg-primary">
                  <th>No</th>
                  <th>ID Surat</th>
                  <th>Jenis Surat</th>			
                  <th>Action</th>
                </tr>
                
                <tbody>
                <?php 
                $no = 1;
                foreach($jenis_surat as $u){ 
                ?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $u->ID_JENIS_SURAT ?></td>
                  <td><?php echo $u->JENIS_SURAT ?></td>			
                  <td>
                    <a href="<?php echo base_url().'crud/edit/'.$u->ID_JENIS_SURAT; ?>" 
                          class="btn btn-primary text-white">Edit</a>
                        
                    <a onclick="deleteConfirm('<?php echo base_url().'crud/hapus_surat/'.$u->ID_JENIS_SURAT; ?>')" href="#!"
                          class="btn btn-danger text-white">Hapus</a>
                    
                  </td>
                </tr>
		<?php } ?>
                </tbody>
              </table>


            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Jenis Surat</h3>
              </div>
            <div>
            <form role="form" action="<?php echo base_url(). 'admin/tambah_aksiJs'; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="ijs">Id Jenis Surat</label>
                    <input type="text" class="form-control" id="judul" name="ijs" placeholder="Masukan ID Jenis Surat" maxlength="5" required>
                  </div>
                  <div class="form-group">
                    <label for="js">Jenis Surat</label>
                    <input type="text" class="form-control" id="fasilitas" name="js" placeholder="Masukan Jenis Surat" maxlength="20"  required>
                  </div>            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="Tambah" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

        <!-- modal alert hapus -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#">Hapus</a>
              </div>
            </div>
          </div>
        </div>
        <!-- modal alert hapus -->




<!-- jQuery -->
<script src="<?php echo base_url('assets/asetadmin/plugins/jquery/jquery.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/asetadmin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/asetadmin/plugins/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/asetadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/demo.js');?>"></script>
<!-- main script -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/main.js');?>"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url() ?>assets/asetadmin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    });
  });
</script>
</body>
</html>
