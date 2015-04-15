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
$id_instansi = $_GET['id_instansi'];

$query = mysql_query("select * from tinstansi where id_instansi='$id_instansi'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../instansi/update.php" method="post">
<input type="hidden" name="id_instansi" value="<?php echo $id_instansi; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>ID Instansi</td>
        	<td>:</td>
        	<td><input type="text" name="id_instansi" maxlength="30" required="required" value="<?php echo $data['id_instansi']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama Instansi</td>
        	<td>:</td>
        	<td><input type="text" name="nama_instansi" maxlength="30" required="required" value="<?php echo $data['nama_instansi']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Alamat</td>
        	<td>:</td>
        	<td><input type="text" name="alamat" maxlength="30" required="required" value="<?php echo $data['alamat']; ?>" /></td>
        </tr>
    	
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../instansi/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
</body>
</html>