<?php 
include('../config/config.php');
include('../config/cek-login.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Informasi Pelanggaran Lalu Lintas</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
 <?php include "header.php" ?> 
 <?php include "../header2.php" ?> 


<div id="bodyPan">
  
  <div id="rightPan">
  	<div id="rightbodyPan">
	
<?php 
$username = $_GET['username'];

$query = mysql_query("select * from tuser where username='$username'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../user/update.php" method="post">
<input type="hidden" name="username" value="<?php echo $username; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" name="username" maxlength="30" required="required" value="<?php echo $data['username']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="text" name="password" maxlength="30" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
    	<tr>
        	<td>NRP</td>
        	<td>:</td>
        	<td><input type="text" name="nrp" maxlength="30" required="required" value="<?php echo $data['nrp']; ?>" /></td>
        </tr>
    	
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../user/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
</body>
</html>