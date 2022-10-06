<?php 
	session_start();
	ob_start();
	
	include 'library/config.php';

	if (empty($_SESSION['username']) or
		empty($_SESSION['password'])) {			

		echo "<p align='center'>Anda harus login terlebih dahulu!</p>";
		echo "<meta http-equiv='refresh' content='1; url=login.php'>";
		
		echo "<meta http-equiv='refresh' content='0.5; url=login.php'>";
	}else{
		define('INDEX',true);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="shortcut icon" href="images/employee.png">
</head>
<body>
	<header><center>Aplikasi MBS Subulul Huda</center></header>
	<div class="container">
		<aside>
			<ul class="menu">
				<li><a href="?hal=dashboard" class="aktif">Dashboard</a></li>
				<li><a href="?hal=pegawai">Costumer Service</a></li>
				<li><a href="?hal=jabatan">Teller</a></li>
				<li><a href="logout.php">Keluar</a></li>
			</ul>
		</aside>
		<section class="main">
			<?php include "konten.php"; ?>
		</section>
	</div>
	<footer>
		Copyright &copy; <b>SMK-BP Subulul Huda</b>
	</footer>
</body>
</html>
<?php 
	}
?>