<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JTI SURAT | Surat Pending</title>
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

  
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="<?php echo base_url('assets/asetadmin/dist/img/jti.png');?>" alt="logo jti" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Surat JTI</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url('assets/asetadmin/dist/img/jti.png');?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata("NAMA_ADMIN"); ?></a>
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
                <a href="<?php echo base_url('admin/jnSrt');?>" class="nav-link">
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
            <h1>Detail Surat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="http://localhost/suratdosen/admin/crud/list">Home</a></li>
              <li class="breadcrumb-item active">Detail Surat</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Detail Surat</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-hover">		
		<?php 
		//$no = 1;
		foreach($detailnilai as $u){ 
      $u->ID_SURAT 
		?>

    <tr ><td colspan="2"><b>Data Mahasiswa</b></td></tr> 		     
    <tr>
      <td><?php echo "NIM" ?></td>
			<td><?php echo $u->NIM ?></td>
    </tr>
    <tr>
      <td><?php echo "Nama Mahasiswa" ?></td>
			<td><?php echo $u->NAMA_MHS ?></td>
    </tr>
    <tr>
      <td><?php echo "Prodi" ?></td>
			<td><?php echo $u->PRODI ?></td>
    </tr>

    <tr ><td colspan="2"><b>Dosen MataKuliah / Pembimbing</b></td></tr>    
    <tr>
      <td><?php echo "NIP Dosen" ?></td>
			<td><?php echo $u->NIP ?></td>
    </tr>    
    <tr>
      <td><?php echo "Nama Dosen" ?></td>
			<td><?php echo $u->NAMA_DOSEN ?></td>
    </tr>

    <tr ><td colspan="2"><b>Data Surat</b></td></tr>
    <tr>
			<td><?php echo "Jenis Surat"//$no++ ?></td>			
      <td><?php echo $u->JENIS_SURAT ?></td>
    </tr>
    <tr>
      <td><?php echo "Nama Mitra" ?></td>
			<td><?php echo $u->NAMA_MITRA ?></td>
    </tr>
    <tr>
      <td><?php echo "Alamat" ?></td>
			<td><?php echo $u->ALAMAT_MITRA ?></td>
    </tr>
    <tr>
      <td><?php echo "Tanggal Pelaksanaan" ?></td>
			<td><?php echo $u->TANGGAL ?></td>
    </tr>  
		<tr>
      <td><?php echo "Tanggal Pengajuan" ?></td>
			<td><?php echo $u->TANGGAL_PENGAJUAN ?></td>
    </tr>
    <tr>
      <td><?php echo "Status Surat" ?></td>
			<td><?php echo $u->STATUS_SURAT ?></td>
    </tr>    	
		<?php } ?>
	</table>
  <table class="table table-bordered table-hover">
  <thead>
  <tr ><td colspan="3"><b>Data Anggota</b></td></tr> 
    <tr>
			<th>No</th>      
			<th>Nama Anggota</th>			
			<th>NIM</th>		
		</tr>
		<?php 
		$noA = 1;
		foreach($detailAnggota as $DA){ 
      $DA->ID_SURAT 
		?>
		<tr>
			<td><?php echo $noA++ ?></td>      
			<td><?php echo $DA->ANGGOTA_MHS ?></td>			
			<td><?php echo $DA->NIM_ANGGOTA ?></td>                            
		</tr>
		<?php } ?>
    </tbody>
     <tfoot>
     <tr>
      <th>No</th>
			<th>Nama Anggota</th>			
			<th>NIM</th>			
     </tr>
     </tfoot>
    </table>  
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        <a class="btn btn-success btn-sm" <?php echo anchor('admin/update/'.$u->ID_SURAT,'Konfimasi'); ?></a>        
        <a class="btn btn-info btn-sm" href="<?php echo base_url('admin');?>">Kembali</a>
        <a class="btn btn-warning btn-sm" href="<?php echo base_url('admin/print/'.$u->ID_SURAT);?>">Print</a>           
        </div>
        <div class="card-footer">
        <a class="btn btn-outline-danger btn-sm" <?php echo anchor('admin/updateTolak1/'.$u->ID_SURAT,'Data Surat Tidak Lengkap'); ?></a>
        <a class="btn btn-outline-danger btn-sm" <?php echo anchor('admin/updateTolak2/'.$u->ID_SURAT,'Data Surat Tidak Valid'); ?></a>
        <a class="btn btn-outline-danger btn-sm" <?php echo anchor('admin/updateTolak3/'.$u->ID_SURAT,'Data Mahasiswa Tidak Lengkap'); ?></a>
        <a class="btn btn-outline-danger btn-sm" <?php echo anchor('admin/updateTolak4/'.$u->ID_SURAT,'Data Mahasiswa Tidak Valid'); ?></a></div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
      

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
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/demo.js');?>"></script>
</body>
</html>
