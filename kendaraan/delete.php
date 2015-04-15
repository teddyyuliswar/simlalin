<?php 
include('../config/config.php');

$no_pol = $_GET['no_pol'];

$query = mysql_query("delete from tkendaraan where no_pol='$no_pol'") or die(mysql_error());

if ($query) {
	header('location:../kendaraan/view.php?message=delete');
}
?>