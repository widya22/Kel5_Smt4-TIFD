<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</title>
</head>
<body>
	<center><h1>Membuat CRUD dengan CodeIgniter | MalasNgoding.com</h1></center>
	<center><?php echo anchor('crud/tambah','Tambah Data'); ?></center> <!--hyperlink untuk tambah data-->

	<!--tabel untuk menampilkan data user-->
	<table style="margin:20px auto;" border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($user as $u){ ?> <!--$user = variabel yang diparsing dari controller yang berisi array data user-->
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->nama ?></td>
			<td><?php echo $u->alamat ?></td>
			<td><?php echo $u->pekerjaan ?></td>
			<td>
			      <?php echo anchor('crud/edit/'.$u->id,'Edit'); ?> <!--hyperlink untuk edit data-->
                              <?php echo anchor('crud/hapus/'.$u->id,'Hapus'); ?> <!--hyperlink untuk hapus data-->
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>