<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');
include('../config/fungsi_indotgl.php');

//tangkap data dari form
$tgl_awal = $_POST['dari_tgl'];
$tgl_akhir = $_POST['sampai_tgl'];
$tgl1 = tgl_indo($tgl_awal);
$tgl2 = tgl_indo($tgl_akhir);
$kd_pimpinan=$_POST['pimpinan'];
$cari = mysql_query ("select * from tsosialisasi where tgl_sosialisasi between '$tgl_awal' and '$tgl_akhir'");
$hitung=mysql_num_rows ($cari);
$cari2 = mysql_query ("select * from tpimpinan where kd_pimpinan='$kd_pimpinan'");
$hitung2=mysql_num_rows ($cari2);

if ($hitung == 0) {
	echo "Silahkan Masukan Data dengan Lengkap";
	}
	else
	{
	?>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 14px;
}
-->
</style>

	<table width="719" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="103"><div align="center"><img src="../images/logo.png" width="56" height="66" /></div></td>
    <td width="762"><p align="center"><strong>KEPOLISIAN NEGARA REPUBLIK INDONESIA</strong></p>
      <p align="center"><strong>DAERAH SUMATERA BARAT</strong></p>
    <p align="center"><strong>RESORT BUKITTINGGI</strong></p>
    <p align="center" class="style1">LAPORAN SOSIALISASI</p>
    <p align="center" class="style1">&nbsp;</p></td>
  </tr>
</table>
    <table width="304" border="0" align="left">
  <tr>
    <td width="119">Dari Tanggal</td>
    <td width="10">:</td>
    <td width="166"><?php echo "$tgl1"; ?></td>
  </tr>
  <tr>
    <td>Sampai Tanggal</td>
    <td>:</td>
    <td><?php echo "$tgl2"; ?></td>
  </tr>
</table>
<p></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="718" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32"><div align="center" class="style1">No</div></td>
    <td width="71"><div align="center" class="style1">NRP</div></td>
    <td width="102"><div align="center" class="style1">ID Instansi</div></td>
    <td width="143"><div align="center" class="style1">Tanggal Sosialisasi</div></td>
    <td width="164"><div align="center" class="style1">Kegiatan</div></td>
    <td width="192"><div align="center" class="style1">Materi</div></td>
  </tr>
  <p>
    <?php
  $i =1;
  while ($data =mysql_fetch_array($cari)) {
  $tgl = tgl_indo($data['tgl_sosialisasi']);
  echo "
  <tr>
    <td><div align='center'>$i</div></td>
    <td><div align='center'>$data[nrp]</div></td>
    <td><div align='center'>$data[id_instansi]</div></td>
	<td><div align='center'>$tgl</div></td>
	<td><div align='center'>$data[kegiatan]</div></td>
	<td><div align='center'>$data[materi]</div></td>
    </tr>";
  $i++;
  }
  echo "</table>";
  }
  ?>
    <!--<a href="pdf_mysql.php">Cetak File PDF</a> -->
  </p>
  </table>
	<table width="718" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32"><div align="center"></div></td>
    <td width="71"><div align="center"></div></td>
    <td width="102"><div align="center"></div></td>
    <td width="143"><div align="center"></div></td>
    <td><div align="center">Bukittinggi, <?php $today = date("j F Y"); echo $today;?>
    </div>
     <?php 
	  if ($hitung2 == 0) {
	echo "Silahkan Masukan Data dengan Lengkap";
	}
	else
	{
	  
	    while ($data2 =mysql_fetch_array($cari2)) {
  echo "
  <div align='center'>
 $data2[jabatan] <br>
 <p>
 </p>
 <br>
 </br>
 <u>$data2[nama_pimpinan]</u> <br>
 NRP. $data2[nrp_pimpinan]
   </div>";
  }
  }
	  ?></td>
    </tr>
  </table>

