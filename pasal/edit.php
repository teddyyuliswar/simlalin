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
$id_pasal = $_GET['id_pasal'];

$query = mysql_query("select * from tpasal where id_pasal='$id_pasal'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../pasal/update.php" method="post">
<input type="hidden" name="id_pasal" value="<?php echo $id_pasal; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>ID Pasal</td>
        	<td>:</td>
        	<td><input type="text" name="id_pasal" maxlength="50" required="required" value="<?php echo $data['id_pasal']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Pasal yang Dilanggar</td>
        	<td>:</td>
        	<td><input type="text" name="psl_yangdilanggar" maxlength="50" required="required" value="<?php echo $data['psl_yangdilanggar']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Besar Denda</td>
        	<td>:</td>
        	<td><input type="text" name="besar_denda" maxlength="50" required="required" value="<?php echo $data['besar_denda']; ?>" /></td>
        </tr>
    	<tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../pasal/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
</body>
</html>