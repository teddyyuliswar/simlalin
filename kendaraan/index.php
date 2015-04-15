<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
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
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <i>".$_SESSION['username']."</i>";
?>

<form name="input_data" action="insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>No Polisi</td>
        	<td>:</td>
        	<td><input type="text" name="no_pol" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Jenis Kendaraan</td>
        	<td>:</td>
        	<td><input type="text" name="jen_kendaraan" maxlength="20" required="required" /></td>
        </tr>
    	<tr>
        	<td>Merek Kendaraan</td>
        	<td>:</td>
        	<td><input type="text" name="merk_kendaraan" maxlength="20" required="required" /></td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
 
		
  <p><img src="loader.gif" id="loading" align="absmiddle" style="display:none;"/>       </p>
	<a href="view.php">Lihat Data</a>  
  	</div>
  </div>
</div>

 <?php include "footer.php" ?> 

</body>
</html>
