<?php 
include('../config/config.php');

$id_instansi = $_GET['id_instansi'];

$query = mysql_query("delete from tinstansi where id_instansi='$id_instansi'") or die(mysql_error());

if ($query) {
	header('location:../instansi/view.php?message=delete');
}
?>