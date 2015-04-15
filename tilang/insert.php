<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$no_reg_tilang = $_POST['no_reg_tilang'];
$no_sim = $_POST['no_sim'];
$no_pol = $_POST['no_pol'];
$tgl_tilang = $_POST['tgl_tilang'];
$jam_tilang = $_POST['jam_tilang'];
$alamat_tilang = $_POST['alamat_tilang'];
$nrp = $_POST['nrp'];
$id_pasal = $_POST['id_pasal'];


//simpan data ke database
$query = mysql_query("insert into ttilang values('$no_reg_tilang', '$no_sim', '$no_pol', '$tgl_tilang', '$jam_tilang', '$alamat_tilang', '$nrp', '$id_pasal')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>