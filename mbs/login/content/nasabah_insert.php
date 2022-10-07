<?php 
	if(!defined('INDEX')) die("");
	$query = mysqli_query($con, "INSERT INTO jabatan SET nama_jabatan = '$_POST[nama]'");
	if($query){
		echo "Data berhasil disimpan!";
		echo "<meta http-equif='refresh' content='1; url=?hal=nasabah'>";
	}else{
		echo "Tidak dapat menyompan data!<br>";
		echo mysqli_error();
	}
 ?>