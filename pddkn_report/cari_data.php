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
//Query
$cari = mysql_query ("select DISTINCT tgl_tilang from ttilang where tgl_tilang between '$tgl_awal' and '$tgl_akhir' ORDER BY ttilang.tgl_tilang ASC");
$hitung=mysql_num_rows ($cari);
$cari2 = mysql_query ("select * from tpimpinan where kd_pimpinan='$kd_pimpinan'");
$hitung2=mysql_num_rows ($cari2);

if ($hitung == 0) {
	echo "Tidak ada Data";
	}
	else
	{
	?>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-size: 14px}
.style3 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-weight: bold;
}
.style4 {font-weight: bold}
.style5 {font-weight: bold}
.style6 {font-weight: bold}
.style7 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; }
-->
</style>

	<table width="1117" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="103"><div align="center"><img src="../images/logo.png" width="56" height="66" /></div></td>
    <td width="1014"><p align="center"><strong>KEPOLISIAN NEGARA REPUBLIK INDONESIA</strong></p>
      <p align="center"><strong>DAERAH SUMATERA BARAT</strong></p>
    <p align="center"><strong>RESORT BUKITTINGGI</strong></p>
    <p align="center" class="style7">Laporan Hasil Dakgar lantas dengan Tilang Sesuai Pendidikan Pelanggar</p></td>
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
<p>&nbsp;</p>
<table width="620" height="123" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32" rowspan="2"><div align="center" class="style2 style1 style18"><strong>No</strong></div></td>
    <td width="150" rowspan="2"><div align="center" class="style2 style1 style18"><strong>Tanggal </strong></div></td>
    <td width="85" rowspan="2"><div align="center" class="style2 style1 style18"><strong>Jumlah Pelanggaran </strong></div></td>
    <td colspan="4"><div align="center" class="style2 style1 style18"><strong>Pendidikan Pelanggar</strong></div>      </td>
  </tr>
  <tr>
    <td width="55"><div align="center" class="style18 style1 style2 style4">
        <div align="center">SD</div>
    </div></td>
    <td width="77"><div align="center" class="style18 style1 style2 style5">
        <div align="center">SLTP</div>
    </div></td>
    <td width="109"><div align="center" class="style18 style1 style2 style6">
        <div align="center">SMA</div>
    </div></td>
    <td width="96"><div align="center" class="style3">Perguruan Tinggi </div>
        <div align="center" class="style2 style1 style18"></div>
      <div align="center" class="style3"></div></td>
  </tr>
  <p>
    <?php
  $i =1;
  while ($data =mysql_fetch_array($cari)) {
  $tgl = tgl_indo($data['tgl_tilang']);
  $tgltilang = $data['tgl_tilang'];
  $cariSD = "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pendidikan='SD' AND ttilang.tgl_tilang='$tgltilang' ";
$resultSD = mysql_query($cariSD);
$resultSD = mysql_fetch_assoc( $resultSD );
$jmlSD = $resultSD['num'];

  $cariSLTP = "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pendidikan='SLTP' AND ttilang.tgl_tilang='$tgltilang' ";
$resultSLTP = mysql_query($cariSLTP);
$resultSLTP= mysql_fetch_assoc( $resultSLTP );
$jmlSLTP = $resultSLTP['num'];

$cariSMA= "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pendidikan='SMA' AND ttilang.tgl_tilang='$tgltilang' ";
$resultSMA = mysql_query($cariSMA);
$resultSMA= mysql_fetch_assoc( $resultSMA );
$jmlSMA= $resultSMA['num'];

$cariPT= "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pendidikan='PT' AND ttilang.tgl_tilang='$tgltilang' ";
$resultPT = mysql_query($cariPT);
$resultPT= mysql_fetch_assoc( $resultPT );
$jmlPT= $resultPT['num'];

  
$total=$jmlSD+$jmlSLTP+$jmlSMA+$jmlPT;
//-----------------------//
 //Menghitung Total Akhir//
//---------------------//
$total_all=$total_all+$total;
$total_SD=$total_SD+$jmlSD;
$total_SLTP=$total_SLTP+$jmlSLTP;
$total_SMA=$total_SMA+$jmlSMA;
$total_PT=$total_PT+$jmlPT;
$total_Lain=$total_Lain+$jmlLain;
  //Menampilkan Data
  echo "
  <tr>
    <td><div align='center'>$i</div></td>
    <td><div align='center'>$tgl</div></td>
    <td><div align='center'>$total</div></td>
	<td><div align='center'>$jmlSD</div></td>
	<td><div align='center'>$jmlSLTP</div></td>
	<td><div align='center'>$jmlSMA</div></td>
	<td><div align='center'>$jmlPT</div></td>
	</tr>";
  $i++;
  }
    //Menampilkan Jumlah Data
   echo "
  <tr>
    <td><div align='center'></div></td>
    <td><div align='center'><b>JUMLAH</b</div></td>
    <td><div align='center'>$total_all</div></td>
	<td><div align='center'>$total_SD</div></td>
	<td><div align='center'>$total_SLTP</div></td>
	<td><div align='center'>$total_SMA</div></td>
	<td><div align='center'>$total_PT</div></td>
	</tr>";
  
  
  echo "</table>";
  }
  ?>
    <!--<a href="pdf_mysql.php">Cetak File PDF</a> -->
  </p>
  </table>
<p>&nbsp;</p>
    <table width="718" border="0" align="right" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32"><div align="center"></div></td>
    <td width="71"><div align="center"></div></td>
    <td width="102"><div align="center"></div></td>
    <td><div align="center"></div>
      <div align="center">Bukittinggi, <?php $today = date("j F Y"); echo $today;?>
      </div>      <?php 
	  if ($hitung2 == 0) {
	echo "Tidak Ada Data";
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

