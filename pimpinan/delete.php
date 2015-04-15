<?php 
include('../config/config.php');

$kd_pimpinan = $_GET['kd_pimpinan'];

$query = mysql_query("delete from tpimpinan where kd_pimpinan='$kd_pimpinan'") or die(mysql_error());

if ($query) {
	header('location:../pimpinan/view.php?message=delete');
}
?>