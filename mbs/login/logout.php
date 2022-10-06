<?php 
		session_start();
		session_destroy();

		echo "<p align='center'>Anda telah logout!</p>"; 
		echo"meta http-equif='refresh' content='2;url=login.php'>";

?>