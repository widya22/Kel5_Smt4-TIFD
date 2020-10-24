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
	<link rel="shortcut icon" href="<?php echo base_url('assets/img/fav_super_admin.png') ?>">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?php echo base_url('assets/img/super_admin_logo.png');?>" alt="logo jti" class="brand-image img-circle elevation-3"
           style="opacity: .8">
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
          <a class="nav-link text-secondary" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          <div class="col-sm-5 ">
            <h1>Kelola Admin</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

  <!-- alert -->
  <?php
    if (isset($_SESSION['ubah_sukses'])){  //alert ubah
  ?>
  <div class="alert alert-success alert-dismissible fade show ubah_sukses" role="alert">
    Data berhasil diubah
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php }
    if(isset($_SESSION['hapus_sukses'])){  //alert hapus
  ?>
  <div class="alert alert-danger alert-dismissible fade show hapus_sukses" role="alert">
    Data berhasil dihapus
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
    <?php }
    if (isset($_SESSION['tambah_sukses'])){   //alert tambnah
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Data berhasil ditambahkan
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php }

if (isset($_SESSION['reset_sukses'])){   //alert reset
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    Password berhasil direset
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php }

if (isset($_SESSION['tambah_gagal'])){   //alert gagal tambah data
  ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Gagal menambahkan data, ID ADMIN tidak boleh sama.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
  <?php }
    unset($_SESSION['ubah_sukses']);
    unset($_SESSION['hapus_sukses']);
    unset($_SESSION['tambah_sukses']);
    unset($_SESSION['tambah_gagal']);
    unset($_SESSION['reset_sukses']);
    ?>
  <!-- alert -->

  <?php 
    //$this->load->library('encrypt'); 
  ?>

<!-- superadmin -->
<div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Super Admin</h3>
            </div>
            <div class="container">
    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
			<th>No</th>
			<th>ID Admin</th>
      <th>Nama Admin</th>
      <th>No Hp</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($superadmin as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->ID_ADMIN ?></td>
			<td><?php echo $u->NAMA_ADMIN ?></td>
			<td><?php echo $u->HP ?></td>	
			<td>
        <a href="<?php echo base_url().'crud/edit_superadmin/'.$u->ID_ADMIN; ?>" 
              class="btn btn-primary text-white">Edit</a>
			  
			</td>
		</tr>
		<?php } ?>
                
                            
                </tbody>
              </table>
            </div>


    <!-- ADMIN -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Admin</h3>
            </div>
            <div class="container">
    
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
			<th>No</th>
			<th>ID Admin</th>
      <th>Nama Admin</th>			
      <th>Prodi</th>			
      <th>No Hp</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($admin as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->ID_ADMIN ?></td>
			<td><?php echo $u->NAMA_ADMIN ?></td>	
			<td><?php echo $u->PRODI ?></td>	
			<td><?php echo $u->HP ?></td>	
			<td>
        <a onclick="resetConfirm('<?php echo base_url().'crud/reset_adm/'.$u->ID_ADMIN; ?>')" href="#!" 
              class="btn btn-primary text-white">Reset Password</a>
            
        <a onclick="deleteConfirm('<?php echo base_url().'crud/hapus_adm/'.$u->ID_ADMIN; ?>')" href="#!"
              class="btn btn-danger text-white">Hapus</a>
			  
			</td>
		</tr>
		<?php } ?>
                </tbody>
              </table>
            </div>
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Admin Baru</h3>
              </div>
            <div>
            <form role="form" action="<?php echo base_url(). 'crud/tambah_aksiADM'; ?>" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="ijs">ID Admin</label>
                    <input type="text" class="form-control" id="judul" name="id_admin" placeholder="Masukan ID Admin" required>
                  </div>
                  <div class="form-group">
                    <label for="js">Nama Admin</label>
                    <input type="text" class="form-control" id="fasilitas" name="nama" placeholder="Masukan Nama" required>
                  </div>

                  <div class="form-group border rounded">
                        <!-- <label for="username">Prodi :</label><br> -->
                        <label class="text-center">Admin Prodi</label>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prodi" id="INTER" value="INTER" required>
                                <label class="form-check-label" for="INTER">
                                    INTER
                                </label>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group">
                        <div class="input-group "> 
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">+62</span>
                            </div>
                            <input type="text" name="hp" placeholder="Masukkan No HP" class="form-control" required onkeypress="return hanyaAngka(event)" minlength="11" maxlength="15"/> <!-- isi input otomatis */ -->
                        </div>
                        <div id="result" class="font-italic"></div>
                    </div>

                  <div class="form-group">
                    <label for="js">Password</label>
                    <input type="password" class="form-control" id="fasilitas" name="pwd" placeholder="Masukan Password" required>
                  </div>           
                <!-- /.card-body -->

                <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                  <label class="form-check-label" for="exampleCheck1">Pastikan data Admin yang dimasukkan sudah benar</label>
                </div>

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

        <!-- modal alert reset -->
        <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Password akan direset menjadi default "JTIPOLIJE".</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-reset" class="btn btn-primary" href="#">Reset</a>
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

    function hanyaAngka(event) {
        var angka = (event.which) ? event.which : event.keyCode
        if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
            return false;
        return true;
    }

</script>
</body>
</html>
