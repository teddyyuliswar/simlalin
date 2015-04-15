<?php 
include('../config/config.php');

$no_reg_tilang = $_GET['no_reg_tilang'];

$query = mysql_query("delete from ttilang where no_reg_tilang='$no_reg_tilang'") or die(mysql_error());

if ($query) {
	header('location:../tilang/view.php?message=delete');
}
?>