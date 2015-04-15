<?php 
include('../config/config.php');

$nrp = $_GET['nrp'];

$query = mysql_query("delete from tpetugas where nrp='$nrp'") or die(mysql_error());

if ($query) {
	header('location:../petugas/view.php?message=delete');
}
?>