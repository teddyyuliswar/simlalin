<?php
include('../config/config.php');

//tangkap data dari form
$no_reg_tilang= $_POST['no_reg_tilang'];
$no_sim = $_POST['no_sim'];
$no_pol = $_POST['no_pol'];
$tgl_tilang = $_POST['tgl_tilang'];
$jam_tilang = $_POST['jam_tilang'];
$alamat_tilang = $_POST['alamat_tilang'];
$nrp = $_POST['nrp'];
$id_pasal = $_POST['id_pasal'];


//update data di database sesuai user_id
$query = mysql_query("update ttilang set no_reg_tilang='$no_reg_tilang', no_sim='$no_sim', no_pol='$no_pol', tgl_tilang='$tgl_tilang', jam_tilang='$jam_tilang', alamat_tilang='$alamat_tilang', nrp='$nrp', id_pasal='$id_pasal'  where no_reg_tilang='$no_reg_tilang'") or die(mysql_error());

if ($query) {
	header('location:view.php?message=success');
}
?>