<?php
session_start();

if (!empty($_SESSION['username'])) {
	header('location:../main/index.php');
}
?>
<html>
<head>
<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
<title>LOGIN</title>
</head>

<body>
<img alt="full screen background image" src="../panorama.jpg" id="full-screen-background-image" />


<?php 
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
	if ($_GET['error'] == 1) {
		echo '<h3>Username dan Password belum diisi!</h3>';
	} else if ($_GET['error'] == 2) {
		echo '<h3>Username belum diisi!</h3>';
	} else if ($_GET['error'] == 3) {
		echo '<h3>Password belum diisi!</h3>';
	} else if ($_GET['error'] == 4) {
		echo '<h3>Username dan Password tidak terdaftar!</h3>';
	}
}
?>
<div id="container">
<form name="login" action="../config/otentikasi.php" method="post">
<label for="name">Username:</label>
		
		<input type="name" name="username">
		
		<label for="username">Password:</label>
		
				
		<input type="password" name="password">
		
		<div id="lower">
		
		
		
		<input type="submit" name="login" value="Login">
		
		</div>
<!-- <table border="0" cellpadding="5" cellspacing="0">
	<tr>
    	<td>Username</td>
    	<td>:</td>
    	<td><input type="text" name="username" /></td>
    </tr>
	<tr>
    	<td>Password</td>
    	<td>:</td>
    	<td><input type="password" name="password" /></td>
    </tr>
	<tr align="right">
    	<td colspan="3"><input type="submit" name="login" value="Login" /></td>
    </tr>
</table> -->
</form>
</body>
</html>