<?php 
include('../config/config.php');

$id_pasal = $_GET['id_pasal'];

$query = mysql_query("delete from tpasal where id_pasal='$id_pasal'") or die(mysql_error());

if ($query) {
	header('location:../pasal/view.php?message=delete');
}
?>