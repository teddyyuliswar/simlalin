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
$no_sim= $_GET['no_sim'];

$query = mysql_query("select * from tmasyarakat where no_sim='$no_sim'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../masyarakat/update.php" method="post">
<input type="hidden" name="no_sim" value="<?php echo $no_sim; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>No. SIM</td>
        	<td>:</td>
        	<td><input type="text" name="no_sim" maxlength="30" required="required" value="<?php echo $data['no_sim']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Nama</td>
        	<td>:</td>
        	<td><input type="text" name="nama" maxlength="30" required="required" value="<?php echo $data['nama']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Alamat</td>
        	<td>:</td>
        	<td><input type="text" name="alamat" maxlength="30" required="required" value="<?php echo $data['alamat']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Jenis Kelamin</td>
        	<td>:</td>
        	<!--<td><input type="text" name="JK" required="required" maxlength="30" value="<?php echo $data['JK']; ?>" /></td> -->
        <td><label>
        	  <select name="JK" id="JK" required="required">
        	    <option value="Pria">Pria</option>
        	    <option value="Wanita">Wanita</option>
                            </select>
							</label></td>
		</tr>
    	<tr>
        	<td>Pekerjaan</td>
        	<td>:</td>
        	<!--<td><input type="text" name="pekerjaan" required="required" maxlength="30"value="<?php echo $data['pekerjaan']; ?>" /></td> -->
        <td><label>
        	  <select name="pekerjaan" id="pekerjaan" required="required" >
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
        	<!--<td><input type="text" name="pendidikan" required="required" maxlength="30" value="<?php echo $data['pendidikan']; ?>" /></td> -->
        <td><label>
        	  <select name="pendidikan" id="pendidikan" required="required" >
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
        	<td><input type="text" name="umur" required="required" maxlength="30" value="<?php echo $data['umur']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Tempat Lahir</td>
        	<td>:</td>
        	<td><input type="text" name="tmp_lahir" required="required" maxlength="30"value="<?php echo $data['tmp_lahir']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Tanggal Lahir</td>
        	<td>:</td>
        	<!--<td><input type="text" name="ttl" maxlength="30" required="required" value="<?php echo $data['ttl']; ?>" /></td> -->
			<td><input type="text" id="ttl" name="ttl" required="required" value="<?php echo $data['ttl']; ?>" onClick="if(self.gfPop)gfPop.fPopCalendar(document.update_data.ttl);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.update_data.ttl);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>
        </tr>
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../masyarakat/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</body>
</html>