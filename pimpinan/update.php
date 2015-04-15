<?php
include('../config/config.php');

//tangkap data dari form
$kd_pimpinan = $_POST['kd_pimpinan'];
$nama_pimpinan = $_POST['nama_pimpinan'];
$nrp_pimpinan = $_POST['nrp_pimpinan'];
$pangkat = $_POST['pangkat'];
$jabatan = $_POST['jabatan'];

//update data di database sesuai user_id
$query = mysql_query("update tpimpinan set kd_pimpinan='$kd_pimpinan', nama_pimpinan='$nama_pimpinan', nrp_pimpinan='$nrp_pimpinan', pangkat='$pangkat', jabatan='$jabatan' where kd_pimpinan='$kd_pimpinan'") or die(mysql_error());

if ($query) {
	header('location:view.php?message=success');
}
?>