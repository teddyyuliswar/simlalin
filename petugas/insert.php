<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$nrp = $_POST['nrp'];
$nama_petugas = $_POST['nama_petugas'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];


//simpan data ke database
$query = mysql_query("insert into tpetugas values('$nrp', '$nama_petugas', '$pangkat', '$jabatan')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>