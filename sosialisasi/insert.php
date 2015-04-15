<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$kd_sosialisasi = $_POST['kd_sosialisasi'];
$tgl_sosialisasi = $_POST['tgl_sosialisasi'];
$kegiatan = $_POST['kegiatan'];
$materi = $_POST['materi'];
$id_instansi = $_POST['id_instansi'];
$nrp = $_POST['nrp'];



//simpan data ke database
$query = mysql_query("insert into tsosialisasi values('$kd_sosialisasi', '$tgl_sosialisasi', '$kegiatan', '$materi', '$id_instansi','$nrp')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>