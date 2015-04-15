<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$id_instansi = $_POST['id_instansi'];
$nama_instansi = $_POST['nama_instansi'];
$alamat = $_POST['alamat'];

//simpan data ke database
$query = mysql_query("insert into tinstansi values( '$id_instansi', '$nama_instansi', '$alamat' )") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>