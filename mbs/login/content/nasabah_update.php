<?php 
	if(!defined('INDEX')) die("");

	$query = mysqli_query($con, "UPDATE jabatan SET WHERE id_jabatan = '$_POST[id]'");

	if($query){
		echo "Data berhasil disimpan!";
		echo "<meta http-equiv='refresh' content='1;url=?hal=nasabah'>";
	}else{
		echo "Tidak bisa menyimpan data!<br>";
		echo mysqli_error();
	}
?>