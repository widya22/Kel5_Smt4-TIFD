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
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/jti.png" alt="logo jti" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Surat JTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/jti.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Nama Admin</a>
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
                <a href="<?php echo base_url('admin');?>"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/jnSrt');?>" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jenis Surat</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtMhs');?>"" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Pengajuan Surat
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtPd');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Menunggu Persetujuan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtProses');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Sedang DiProses</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtDapatDiambil');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-warning"></i>
                  <p>Dapat Diambil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtTlk');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-danger"></i>
                  <p>Surat Ditolak</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url('admin/dtSrtSls');?>" class="nav-link">
                  <i class="nav-icon far fa-circle text-info"></i>
                  <p>Surat Selesai</p>
                </a>
              </li>
              </ul>
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
            <h1>Data Mahasiswa</h1>
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

    <!-- Main content -->
    

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Jenis Surat </h3>
            </div>
            <div class="container">
   
        <div class="pull-right"><a class="btn btn-sm btn-success" data-toggle="modal" data-target="#modal_add_new"> Add New</a></div>       
    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
			<th>No</th>
			<th>ID Surat</th>
      <th>Jenis Surat</th>			
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($jenis_surat as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->ID_JENIS_SURAT ?></td>
			<td><?php echo $u->JENIS_SURAT ?></td>			
			<td>
			      <?php echo anchor('crud/edit/'.$u->ID_JENIS_SURAT,'Edit'); ?>
            <?php echo anchor('crud/hapus/'.$u->ID_JENIS_SURAT,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
                
                            
                </tbody>
                <tfoot>
                <tr>
                <th>No</th>
			<th>ID Surat</th>
      <th>Jenis Surat</th>			
			<th>Action</th>
                </tr>
                </tfoot>
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
                    <input type="text" class="form-control" id="judul" name="ijs" placeholder="Masukan ID Jenis Surat">
                  </div>
                  <div class="form-group">
                    <label for="js">Jenis Surat</label>
                    <input type="text" class="form-control" id="fasilitas" name="js" placeholder="Masukan Jenis Surat">
                  </div>            
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="Tambah" class="btn btn-primary">Submit</button>
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


<!-- ============ MODAL ADD BARANG =============== -->
<div class="modal fade" id="modal_add_new" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Add New Barang</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'admin/simpan_js'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >IJS</label>
                        <div class="col-xs-8">
                            <input id="id_jenis_surat" name="id_jenis_surat" class="form-control" type="text" placeholder="Id Jenis Surat" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >JS</label>
                        <div class="col-xs-8">
                            <input id="jenis_surat" name="jenis_surat" class="form-control" type="text" placeholder="Jenis Surat" required>
                        </div>
                    </div>                    
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD BARANG-->





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
