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
$no_pol = $_GET['no_pol'];

$query = mysql_query("select * from tkendaraan where no_pol='$no_pol'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../kendaraan/update.php" method="post">
<input type="hidden" name="no_pol" value="<?php echo $no_pol; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Nomor Polisi</td>
        	<td>:</td>
        	<td><input type="text" name="no_pol" maxlength="20" required="required" value="<?php echo $data['no_pol']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Jenis Kendaraan</td>
        	<td>:</td>
        	<td><input type="text" name="jen_kendaraan" maxlength="20" required="required" value="<?php echo $data['jen_kendaraan']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Merk Kendaraan</td>
        	<td>:</td>
        	<td><input type="text" name="merk_kendaraan" maxlength="20" required="required" value="<?php echo $data['merk_kendaraan']; ?>" /></td>
        </tr>
    	<tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../kendaraan/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
</body>
</html>