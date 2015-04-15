<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$no_pol = $_POST['no_pol'];
$jen_kendaraan = $_POST['jen_kendaraan'];
$merk_kendaraan = $_POST['merk_kendaraan'];


//simpan data ke database
$query = mysql_query("insert into tkendaraan values('$no_pol', '$jen_kendaraan', '$merk_kendaraan')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>