<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$kd_pimpinan = $_POST['kd_pimpinan'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$nrp_pimpinan = $_POST['nrp_pimpinan'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];

//simpan data ke database
$query = mysql_query("insert into tpimpinan values('$kd_pimpinan', '$nama_pimpinan', '$nrp_pimpinan', '$pangkat', '$jabatan')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>