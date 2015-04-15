<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$id_pasal = $_POST['id_pasal'];
$psl_yangdilanggar = $_POST['psl_yangdilanggar'];
$besar_denda = $_POST['besar_denda'];


//simpan data ke database
$query = mysql_query("insert into tpasal values('$id_pasal', '$psl_yangdilanggar', '$besar_denda')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>