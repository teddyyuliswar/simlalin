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

<form name="input_data" action="../sosialisasi/insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td width="139">Kode Sosialiasi</td>
        	<td width="9">:</td>
        	<td width="210"><input name="kd_sosialisasi" type="text" id="kd_sosialisasi" maxlength="30" required="required" /></td>
        </tr>
    	
    	<tr>
        	<td>Tanggal Sosialisasi</td>
        	<td>:</td>
        	<!--<td><input name="tgl_sosialisasi" type="text" id="tgl_sosialisasi" maxlength="30" required="required" /></td> -->
			<td><input type="text" id="tgl_sosialisasi" name="tgl_sosialisasi" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_sosialisasi);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_sosialisasi);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>
        	</tr>
			<tr>
			<td>Kegiatan</td>
        	<td>:</td>
        	<td><input name="kegiatan" type="text" id="kegiatan" maxlength="30" required="required" /></td>
        </tr>
    	<tr>
        	<td>Materi</td>
        	<td>:</td>
        	<td><input name="materi" type="text" id="materi" maxlength="30" required="required" /></td>
        </tr>
		<tr>
        	<td>ID Instansi</td>
        	<td>:</td>
        	<td><input name="id_instansi" type="text" id="id_instansi" maxlength="30" required="required" /></td>
        </tr>
    	
    	<tr>
        	<td>NRP Petugas</td>
        	<td>:</td>
        	<td><input name="nrp" type="text" id="nrp" maxlength="30" required="required" /></td>
        </tr>
			
        <tr>
        	<td align="right" colspan="3">
        	  
        	  <div align="center">
        	    <input type="submit" name="submit" value="Simpan" />
      	        </div></td>
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
 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

</body>
</html>
