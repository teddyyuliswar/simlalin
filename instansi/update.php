<?php
include('../config/config.php');

//tangkap data dari form
$id_instansi = $_POST['id_instansi'];
$nama_instansi = $_POST['nama_instansi'];
$alamat = $_POST['alamat'];

//update data di database sesuai id_instansi
$query = mysql_query("update tinstansi set nama_instansi='$nama_instansi', alamat='$alamat' where id_instansi='$id_instansi'") or die(mysql_error());

if ($query) {
	header('location:../instansi/view.php?message=success');
}
?>