<?php 
if(!defined('INDEX')) die("");

$halaman = array("dashboard","pegawai","pegawai_tambah","pegawai_update","pegawai_hapus","nasabah","nasabah_tambah","nasabah_insert","nasabah_edit","nasabah_update","nasabah_hapus");

if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";

	foreach($halaman as $h){
	if($hal == $h){
		include "content/$h.php";
		break;
		}
	}

 ?>