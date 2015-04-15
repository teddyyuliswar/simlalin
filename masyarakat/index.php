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

<form name="input_data" action="../masyarakat/insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td width="98">No SIM</td>
        	<td width="4">:</td>
        	<td width="200"><input type="text" name="no_sim" maxlength="30" required="required" /></td>
        </tr>
    	
    	<tr>
        	<td>Nama</td>
        	<td>:</td>
        	<td><input type="text" name="nama" maxlength="30" required="required" /></td>
        </tr>
    	
    	<tr>
        	<td>Alamat</td>
        	<td>:</td>
        	<td><input type="text" name="alamat" maxlength="30" required="required" /></td>
        </tr>
    	<tr>
        	<td>Jenis Kelamin</td>
        	<td>:</td>
        	<td><label>
        	  <select name="JK" id="JK">
        	    <option value="Pria">Pria</option>
        	    <option value="Wanita">Wanita</option>
                            </select>
        	</label></td>
    	</tr>
		<tr>
        	<td>Pekerjaan</td>
        	<td>:</td>
        	<td><label>
        	  <select name="pekerjaan" id="pekerjaan">
        	    <option value="PNS">PNS</option>
        	    <option value="Swasta">Swasta</option>
        	    <option value="MHS">Mahasiswa</option>
        	    <option value="PLJ">Pelajar</option>
        	    <option value="TNI">TNI</option>
        	    <option value="Polri">Polri</option>
        	    <option value="Lain-lain">Lain-lain</option>
                            </select>
        	</label></td>
		</tr>
    	
    	<tr>
        	<td>Pendidikan</td>
        	<td>:</td>
        	<td><label>
        	  <select name="pendidikan" id="pendidikan">
        	    <option value="SD">SD</option>
        	    <option value="SLTP">SLTP</option>
        	    <option value="SMA">SMA</option>
        	    <option value="PT">PT</option>
      	      </select>
        	</label></td>
        </tr>
    	
    	<tr>
        	<td>Umur</td>
        	<td>:</td>
        	<td><input type="text" name="umur" maxlength="30" required="required" /> Tahun</td>
        </tr>
    	<tr>
        	<td>Tempat Lahir</td>
        	<td>:</td>
        	<td><input type="text" name="tmp_lahir" maxlength="30" required="required" /></td>
        </tr>
			<td>Tanggal Lahir</td>
        	<td>:</td>
        	<!--<td><input type="text" name="ttl" maxlength="30" required="required" /></td>-->
            <td><input type="text" id="ttl" name="ttl" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.ttl);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.ttl);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>

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
 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

</body>
</html>
