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
$kd_sosialisasi= $_GET['kd_sosialisasi'];

$query = mysql_query("select * from tsosialisasi where kd_sosialisasi='$kd_sosialisasi'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../sosialisasi/update.php" method="post">
<input type="hidden" name="kd_sosialisasi" value="<?php echo $kd_sosialisasi; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    		<tr>
        	<td>Kode Sosialisasi</td>
        	<td>:</td>
        	<td><input type="text" name="kd_sosialisasi" maxlength="30" required="required" value="<?php echo $data['kd_sosialisasi']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Tanggal Sosialisasi</td>
        	<td>:</td>
        	<!--<td><input type="text" name="tgl_sosialisasi" maxlength="30" required="required" value="<?php echo $data['tgl_sosialisasi']; ?>" /></td>-->
			<td><input type="text" name="tgl_sosialisasi" equired="required" value="<?php echo $data['tgl_sosialisasi']; ?>" onClick="if(self.gfPop)gfPop.fPopCalendar(document.update_data.tgl_sosialisasi);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.update_data.tgl_sosialisasi);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>
        </tr>
    	<tr>
        	<td>Kegiatan</td>
        	<td>:</td>
        	<td><input type="text" name="kegiatan" maxlength="30" required="required" value="<?php echo $data['kegiatan']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Materi</td>
        	<td>:</td>
        	<td><input type="text" name="materi" required="required" maxlength="30" value="<?php echo $data['materi']; ?>" /></td>
        </tr>
		<tr>
        	<td>ID Instansi</td>
        	<td>:</td>
        	<td><input type="text" name="id_instansi" required="required" maxlength="30" value="<?php echo $data['id_instansi']; ?>" /></td>
        </tr>
    	<tr>
        	<td>NRP</td>
        	<td>:</td>
        	<td><input type="text" name="nrp" required="required" maxlength="30" value="<?php echo $data['nrp']; ?>" /></td>
        </tr>
    	
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
</table>
</form>

<a href="../sosialisasi/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 

 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
 </body>
</html>