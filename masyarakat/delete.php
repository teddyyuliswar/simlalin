<?php 
include('../config/config.php');

$no_sim = $_GET['no_sim'];

$query = mysql_query("delete from tmasyarakat where no_sim='$no_sim'") or die(mysql_error());

if ($query) {
	header('location:../masyarakat/view.php?message=delete');
}
?>