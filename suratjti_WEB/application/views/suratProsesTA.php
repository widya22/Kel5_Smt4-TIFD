<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>JTI SURAT | Surat Proses</title>
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

  <!-- /.navbar -->

  <?php $this->load->view('sidebar_menu'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <a class="nav-link text-secondary" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
          <div class="col-sm-5">
            <h1>Surat DiProses</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin');?>">Home</a></li>
              <li class="breadcrumb-item active">Surat Proses</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Surat DiProses</h3>
            </div>
            <ul class="nav nav-tabs">
            <li class="nav-link"><a href="dtSrtProsesMK">Mata Kuliah</a></li>
            <li class="nav-link"><a href="dtSrtProsesPKL">PKL</a></li>
            <li class="nav-link"><a href="dtSrtProsesOBS">Observasi</a></li>
            <li class="nav-link active"><a href="dtSrtProsesTA">Tugas Akhir</a></li>
            </ul>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <!-- maksimal 5 th biar bisa nampilin page dan sorting -->
                <tr>
			<th width="20">No</th>      
			<th width="30">Surat</th>			
			<th width="100">NIM</th>
			<th width="230">Nama Mitra</th>
      <th width="100">Pengajuan</th>
      <th width="100">Pelaksanaan</th>
			<th width="150">Status Surat</th>
			<th>Action</th>
		</tr>
    <tbody>
    <?php 
    if($surat!=null){

$no = 1;
		foreach($surat as $u){ 
      $u->ID_SURAT 
		?>
		<tr>
			<td><?php echo $no++ ?></td>      
			<td><?php echo $u->ID_JENIS_SURAT ?></td>			
			<td><?php echo $u->NIM ?></td>
			<td><?php echo $u->NAMA_MITRA ?></td>
      <td><?php echo $u->TANGGAL ?></td>
      <td><?php echo $u->TANGGAL_PENGAJUAN?></td>
			<td><?php echo $u->STATUS_SURAT ?></td>
			<td> <a class="btn btn-info btn-sm" <?php echo anchor('admin/dsDiproses/'.$u->ID_SURAT,'Detail'); ?></a> <a class="btn btn-warning btn-sm" href="<?php echo base_url('admin/print/'.$u->ID_SURAT);?>">Print</a> <a class="btn btn-success btn-sm" <?php echo anchor('admin/updatestatus2/'.$u->ID_SURAT,'Selesai'); ?></a></td>
            <td> </td>
            <td> </td>
		</tr>
    <?php }}else { ?>
		<?php } ?>
                    
                </tbody>
              </table>
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
<div id="modalTolak" class="modal fade" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Tolak</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<!-- form Tolak -->
					<form action="<?php echo base_url('admin/updateTolak'); ?>" method="post">						
            <div class="form-group">
               <label>Alasan</label>
                  <div class="row">
                  <div class="col-sm-10">
            <a class="btn btn-danger btn-block" <?php echo anchor('admin/updateTolak1/'.$u->ID_SURAT,'Data Surat Tidak Lengkap'); ?></a><p></p>
            <a class="btn btn-danger btn-block" <?php echo anchor('admin/updateTolak2/'.$u->ID_SURAT,'Data Surat Tidak Valid'); ?></a><p></p>
            <a class="btn btn-danger btn-block" <?php echo anchor('admin/updateTolak3/'.$u->ID_SURAT,'Data Mahasiswa Tidak Lengkap'); ?></a><p></p>
            <a class="btn btn-danger btn-block" <?php echo anchor('admin/updateTolak4/'.$u->ID_SURAT,'Data Mahasiswa Tidak Valid'); ?></a>
             </div>
             </div>			
            </div>
  

					</form>
					<!-- end form login -->
				</div>
			</div>
		</div>
	</div>

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
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
</body>
</html>
