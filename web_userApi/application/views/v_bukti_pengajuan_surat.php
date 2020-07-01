<?php 

echo $no_id	= $this->input->post('id_surat');

?>

<!DOCTYPE html>
<html>
<head>
	<title>JTI Surat</title>
</head>
<body>

		<h2>DATA LAPORAN BARANG</h2>
		<h4>WWW.MALASNGODING.COM</h4>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Tanggal</th>
			<th>Nama Barang</th>
			<th width="5%">Jumlah</th>
		</tr>
		<?php 
		$no = 1;
		foreach($database1 as $u){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $u->NIP; ?></td>
			<td><?php echo $u->NIM; ?></td>
		</tr>
		<?php 
		}
		?>

	</table>

	<script>
		// window.print();
	</script>

</body>
</html>