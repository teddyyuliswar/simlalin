<?php
include('../config/config.php');

//tangkap data dari form
$kd_sosialisasi= $_POST['kd_sosialisasi'];
$tgl_sosialisasi = $_POST['tgl_sosialisasi'];
$kegiatan = $_POST['kegiatan'];
$materi = $_POST['materi'];
$id_instansi = $_POST['id_instansi'];
$nrp = $_POST['nrp'];



//update data di database sesuai user_id
$query = mysql_query("update tsosialisasi set kd_sosialisasi='$kd_sosialisasi', tgl_sosialisasi='$tgl_sosialisasi', kegiatan='$kegiatan', materi='$materi', id_instansi='$id_instansi', nrp='$nrp'  where kd_sosialisasi='$kd_sosialisasi'") or die(mysql_error());

if ($query) {
	header('location:?page=view_kegiatan_hod');
}
?>