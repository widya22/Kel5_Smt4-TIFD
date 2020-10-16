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
            <h1>Surat Pending</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('admin');?>">Home</a></li>
              <li class="breadcrumb-item active">Surat Pending</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Surat Pending</h3>
            </div>
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <!-- maksimal 5 th biar bisa nampilin page dan sorting -->
                <tr>
			<th width="20">No</th>      
			<th width="30">Surat</th>			
			<th width="100">NIM</th>
			<th width="300">Nama Mitra</th>
      <th width="100">Pengajuan</th>
      <th width="100">Pelaksanaan</th>
			<th width="120">Status Surat</th>
			<th colspan="3">Action</th>
		</tr>
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
			<td> <a class="btn btn-info btn-sm" <?php echo anchor('admin/detailSurat0/'.$u->ID_SURAT,'Detail'); ?></a> </td>
      <td><a class="btn btn-success btn-sm" onclick= <?php echo anchor('admin/update/'.$u->ID_SURAT,'Konfirmasi'); ?></a> </td>     
      <!-- <td><a class="btn btn-success btn-sm" onclick="konfirmasiConfirm('url')"  href="#!">AHA</a> </td>       -->
      <td><a class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalTolak">Tolak</a></td>       
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
          <label>Alasan :</label>		
          <!-- <input name= "alasan" type="text" class="form-control">
          </input>	 -->
            <div class="form-group text-center d-flex justify-content-center">
              
                  <div class="row">
            <a class="btn btn-danger btn-block mr-2 ml-2" <?php echo anchor('admin/updateTolak1/'.$u->ID_SURAT,'Data Surat Tidak Lengkap'); ?></a><p></p>
            <a class="btn btn-danger btn-block mr-2 ml-2" <?php echo anchor('admin/updateTolak2/'.$u->ID_SURAT,'Data Surat Tidak Valid'); ?></a><p></p>
            <a class="btn btn-danger btn-block mr-2 ml-2" <?php echo anchor('admin/updateTolak3/'.$u->ID_SURAT,'Data Mahasiswa Tidak Lengkap'); ?></a><p></p>
            <a class="btn btn-danger btn-block mr-2 ml-2" <?php echo anchor('admin/updateTolak4/'.$u->ID_SURAT,'Data Mahasiswa Tidak Valid'); ?></a>
             </div>			
            </div>
  

					</form>
					<!-- end form login -->
				</div>
			</div>
		</div>
	</div>

 <!-- modal konfirmasi -->
 <div class="modal fade" id="konfirmModal" tabindex="-1" role="dialog" arialabelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">Pastikan data yang diterima sudah benar.</div>
                <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <a id="btn-konfirm" class="btn btn-primary" href="#">Konfirmasi</a>
              </div>
            </div>
          </div>
        </div>
  <!-- modal konfirmasi -->


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
<!-- main js -->
<script src="<?php echo base_url('assets/asetadmin/dist/js/main.js');?>"></script>
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
