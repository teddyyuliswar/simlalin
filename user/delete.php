<?php 
include('../config/config.php');

$username = $_GET['username'];

$query = mysql_query("delete from tuser where username='$username'") or die(mysql_error());

if ($query) {
	header('location:../user/view.php?message=delete');
}
?>