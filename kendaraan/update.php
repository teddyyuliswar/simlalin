<?php
include('../config/config.php');

//tangkap data dari form
$no_pol = $_POST['no_pol'];
$jen_kendaraan = $_POST['jen_kendaraan'];
$merk_kendaraan = $_POST['merk_kendaraan'];


//update data di database sesuai user_id
$query = mysql_query("update tkendaraan set no_pol='$no_pol', jen_kendaraan='$jen_kendaraan', merk_kendaraan='$merk_kendaraan' where no_pol='$no_pol'") or die(mysql_error());

if ($query) {
	header('location:../kendaraan/view.php?message=success');
}
?>