<?php
include('../config/config.php');

//tangkap data dari form
$nrp = $_POST['nrp'];
$nama_petugas = $_POST['nama_petugas'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];


//update data di database sesuai user_id
$query = mysql_query("update tpetugas set nrp='$nrp', nama_petugas='$nama_petugas', pangkat='$pangkat', jabatan='$jabatan' where nrp='$nrp'") or die(mysql_error());

if ($query) {
	header('location:../petugas/view.php?message=success');
}
?>