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
   <!-- Favicon-->
   <?php if($_SESSION["roles"] == 'super'){ ?>
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_super_admin.png') ?>">
   <?php }else{ ?>
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_admin.png') ?>">
   <?php } ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
    <?php if($_SESSION["roles"] == 'super'){ ?>
      <img src="<?php echo base_url('assets/img/super_admin_logo.png');?>" alt="logo jti" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    <?php }else{ ?>
      <img src="<?php echo base_url('assets/img/admin_logo.png');?>" alt="logo jti" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    <?php } ?>

      <span class="brand-text font-weight-light">Surat JTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
            <a class="d-block text-light"><?php echo $_SESSION["nama"]; ?></a>
            <a href="<?php echo base_url('login0/logout') ?>" onclick="return confirm('Anda yakin ingin keluar?')">Logout</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">              
              <li class="nav-item">
                <a href="#!"  class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Admin</p>
                </a>
              </li>
             
          
            </ul>
          </li>
          
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active">Edit Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

       <!-- alert -->
       <?php
    if (isset($_SESSION['pwd_gagal'])){   //alert gagal tambah data
      ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Update Gagal, Periksa Password Anda
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <?php }
        unset($_SESSION['pwd_gagal']);
        ?>
      <!-- alert -->


    <!-- Main content -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <div class="container">
   
        <!-- <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Add New</a></div>        -->
    
         
            <div>
            <?php
            foreach($superadmin as $j) {
            ?>
            <form role="form" action="<?php echo base_url(). 'crud/update_aksi_admin'; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="ijs">Id Admin</label>
                    <input type="text" class="form-control" name="id" value="<?php echo $j->ID_ADMIN ?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="js">Nama Admin</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $j->NAMA_ADMIN ?>">
                  </div>

                  <div class="form-group">
                    <label for="hp">Nomor HP</label>
                    <input type="text" class="form-control" name="hp" value="<?php echo $j->HP ?>">
                  </div> 
                  <div class="form-group">
                    <label for="js">Ganti Password?</label>
                    <input type="password" class="form-control" name="pwd1" placeholder="Password Lama">
                    <input type="password" class="form-control" name="pwd2" placeholder="Password Baru">
                    <p>*kosongkan jika password tidak ingin diganti</p>
                  </div> 
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="Tambah" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            <?php } ?>
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


<!-- jQuery -->
<script src="<?php echo base_url('assets/asetadmin/plugins/jquery/jquery.min.js');?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url('assets/asetadmin/plugins/bootstrap/js/bootstrap.bundle.min.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/asetadmin/plugins/datatables/jquery.dataTables.js');?>"></script>
<script src="<?php echo base_url('assets/asetadmin/plugins/datatables-bs4/js/dataTables.bootstrap4.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/demo.js');?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
