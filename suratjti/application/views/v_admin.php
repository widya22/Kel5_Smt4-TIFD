<!DOCTYPE html>
<html>
<head>
	<title>Membuat login dengan codeigniter | www.malasngoding.com</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h3>Hai, <?php echo $this->session->userdata("USERNAME_DSN"); ?></h3>
	<h2>Hai, <?php echo $this->session->userdata("nama_admin"); ?></h2>
	<a href="<?php echo base_url('login/logout'); ?>">Logout</a>
</body>
</html>