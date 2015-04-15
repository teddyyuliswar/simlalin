<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nrp = $_POST['nrp'];

//simpan data ke database
$query = mysql_query("insert into tuser values( '$username', '$password', '$nrp' )") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>