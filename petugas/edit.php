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
$nrp = $_GET['nrp'];

$query = mysql_query("select * from tpetugas where nrp='$nrp'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../petugas/update.php" method="post">
<input type="hidden" name="nrp" value="<?php echo $nrp; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>NRP</td>
        	<td>:</td>
        	<td><input type="text" name="nrp" maxlength="30" required="required" value="<?php echo $data['nrp']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama Petugas</td>
        	<td>:</td>
        	<td><input type="text" name="nama_petugas" maxlength="30" required="required" value="<?php echo $data['nama_petugas']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Pangkat</td>
        	<td>:</td>
        	<td><input type="text" name="pangkat" maxlength="30" required="required" value="<?php echo $data['pangkat']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Jabatan</td>
        	<td>:</td>
        	<td><input type="text" name="jabatan" required="required" value="<?php echo $data['jabatan']; ?>" /></td>
        </tr>
    	   <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../petugas/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
</body>
</html>