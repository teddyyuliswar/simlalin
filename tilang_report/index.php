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
echo "<br>";
echo "<h3>Silahkan Cetak Laporan Tilang Berikut :</h3>";
?>

<form name="input_data" action="cari_data.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Dari Tanggal</td>
        	<td>:</td>
        	<!--<td><input type="text" name="id_instansi" maxlength="30" required="required" /></td> -->
        <td><input type="text" id="dari_tgl" name="dari_tgl" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.dari_tgl);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.dari_tgl);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>
		
        </tr>
        	<tr>
        	<td>Sampai Tanggal</td>
        	<td>:</td>
        	<!--<td><input type="text" name="nama_instansi" maxlength="30" required="required" /></td> -->
             <td><input type="text" id="sampai_tgl" name="sampai_tgl" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.sampai_tgl);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.sampai_tgl);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>
        </tr>
		<tr>
        	<td>Pimpinan</td>
        	<td>:</td>
            <td>
             <select name="pimpinan" id="pimpinan">
             <?php 
			 mysql_connect("localhost","root","") or die(mysql_error());     
mysql_select_db("simlalin") or die (mysql_error());  
			 $myquery="select kd_pimpinan, nama_pimpinan from tpimpinan";     
$daftarpimpinan=mysql_query($myquery) or die (mysql_error());     
while($dataku=mysql_fetch_object($daftarpimpinan))     
{         //perulangan menampilkan data         
echo "<option value=\"$dataku->kd_pimpinan\">$dataku->nama_pimpinan</option>";   
  }   ?>
                </select>
            </label></td>
		</tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Cetak" /></td>
        </tr>
    </tbody>
</table>
</form>
 
		
  <p><img src="loader.gif" id="loading" align="absmiddle" style="display:none;"/>       </p>  
  	</div>
  </div>
</div>

 <?php include "footer.php" ?> 
 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

</body>
</html>
