<?php 
include('../config/config.php');

$kd_sosialisasi = $_GET['kd_sosialisasi'];

$query = mysql_query("delete from tsosialisasi where kd_sosialisasi='$kd_sosialisasi'") or die(mysql_error());

if ($query) {
	header('location:../sosialisasi/view.php?message=delete');
}
?>