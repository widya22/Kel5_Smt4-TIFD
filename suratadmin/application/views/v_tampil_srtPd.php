<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center>
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Surat</th>
			<th>NIP</th>
			<th>NIM</th>
			<th>Nama Mitra</th>
			<th>Traking Surat</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($surat as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->ID_JENIS_SURAT ?></td>
			<td><?php echo $u->NIP ?></td>
			<td><?php echo $u->NIM ?></td>
			<td><?php echo $u->NAMA_MITRA ?></td>
			<td><?php echo $u->TRAKING_SURAT ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->NIM,'Edit'); ?>
                              <?php echo anchor('crud/hapus/'.$u->NIM,'Hapus'); ?>
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>