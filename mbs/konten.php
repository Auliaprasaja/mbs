<?php 
if(!defined('INDEX')) die("");

$halaman = array("dashboard","nasabah","nasabah_tambah","nasabah_insert","nasabah_edit","nasabah_update","nasabah_hapus");

if(isset($_GET['hal'])) $hal = $_GET['hal'];
else $hal = "dashboard";

include "content/$hal.php";

// if($hal == 'nasabah'){
// 	include "content/nasabah.php";
// }
// elseif($hal == 'teller'){
// 	include "content/tabungan.php";
// }
// else




// foreach($halaman as $h){
// 	// if($hal == $h){
// 	// 	include "content/$h.php";
// 	// 	break;
// 	// }

// 	var_dump($h);
// }



?>