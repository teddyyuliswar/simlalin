<?php
include('../config/config.php');

//tangkap data dari form
$id_pasal = $_POST['id_pasal'];
$psl_yangdilanggar = $_POST['psl_yangdilanggar'];
$besar_denda = $_POST['besar_denda'];

//update data di database sesuai user_id
$query = mysql_query("update tpasal set id_pasal='$id_pasal', psl_yangdilanggar='$psl_yangdilanggar', besar_denda='$besar_denda' where id_pasal='$id_pasal'") or die(mysql_error());

if ($query) {
	header('location:../pasal/view.php?message=success');
}
?>