<?php
include('../config/config.php');

//tangkap data dari form
$username = $_POST['username'];
$password = $_POST['password'];
$nrp = $_POST['nrp'];

//update data di database sesuai username
$query = mysql_query("update tuser set password='$password', nrp='$nrp' where username='$username'") or die(mysql_error());

if ($query) {
	header('location:../user/view.php?message=success');
}
?>