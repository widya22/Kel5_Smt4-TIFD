<!DOCTYPE html>
<html>
<head>
	<title>Membuat form validation dengan Codeigniter | MalasNgoding.com</title>
</head>
<body>
	<h1>Membuat Form Validation dengan CodeIgniter</h1>
	<?php echo validation_errors(); ?>		<!--pesan peringatan untuk validasi yang salah atau error -->
	<?php echo form_open('form/aksi'); ?>	<!--menetapkan aksi dari form ke function aksi pada controller form dan membuka controller form dengan function form_open()-->
		<label>Nama</label><br/>
		<input type="text" name="nama"><br/>
        <?php echo form_error('nama'); ?>	<!--menampilkan pesan kesalahan form validasi manual pada nama-->
		<label>Email</label><br/>
		<input type="text" name="email"><br/>
        <?php echo form_error('email'); ?>	<!--menampilkan pesan kesalahan form validasi manual pada email-->
		<label>Konfirmasi Email</label><br/>
		<input type="text" name="konfir_email"><br/>
        <?php echo form_error('konfir_email'); ?>	<!--menampilkan pesan kesalahan form validasi manual pada konfirmasi email-->
		<input type="submit" value="Simpan">
	</form>
</body>
</html>