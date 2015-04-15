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
	echo "Tidak Ada Data";
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
-->
</style>

	<table width="1117" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="103"><div align="center"><img src="../images/logo.png" width="56" height="66" /></div></td>
    <td width="1014"><p align="center"><strong>KEPOLISIAN NEGARA REPUBLIK INDONESIA</strong></p>
      <p align="center"><strong>DAERAH SUMATERA BARAT</strong></p>
    <p align="center"><strong>RESORT BUKITTINGGI</strong></p>
    <h3 align="center"> Laporan Hasil Dakgar lantas dengan Tilang Sesuai Profesi Pelanggar</h3>    </td>
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
<table width="902" height="123" border="1" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="32" rowspan="2"><div align="center" class="style1 style18 style2"><strong>No</strong></div></td>
    <td width="150" rowspan="2"><div align="center" class="style1 style18 style2"><strong>Tanggal </strong></div></td>
    <td width="85" rowspan="2"><div align="center" class="style1 style18 style2"><strong>Jumlah Pelanggaran </strong></div></td>
    <td colspan="7"><div align="center" class="style1 style18 style2"><strong>Profesi Pelanggar</strong></div></td>
  </tr>
  <tr>
    <td width="55"><div align="center" class="style18">
      <div align="center" class="style3">PNS</div>
    </div></td>
    <td width="77"><div align="center" class="style18 style1 style2">
      <div align="center"><strong>Swasta</strong></div>
    </div></td>
    <td width="109"><div align="center" class="style18">
      <div align="center" class="style3">Mahasiswa</div>
    </div></td>
    <td width="81"><div align="center" class="style3">PLJ </div>
        <div align="center" class="style18"></div></td>
    <td width="73"><div align="center" class="style3">TNI</div></td>
    <td width="121"><div align="center" class="style3">POLRI</div></td>
    <td width="97"><div align="center" class="style3">LAIN-LAIN</div></td>
  </tr>
  <p>
    <?php
  $i =1;
  while ($data =mysql_fetch_array($cari)) {
  $tgl = tgl_indo($data['tgl_tilang']);
  $tgltilang = $data['tgl_tilang'];
  $caripns = "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='PNS' AND ttilang.tgl_tilang='$tgltilang' ";
$resultpns = mysql_query($caripns);
$resultpns = mysql_fetch_assoc( $resultpns );
$jmlpns = $resultpns['num'];

  $cariSwasta = "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='Swasta' AND ttilang.tgl_tilang='$tgltilang' ";
$resultSwasta = mysql_query($cariSwasta);
$resultSwasta= mysql_fetch_assoc( $resultSwasta );
$jmlSwasta = $resultSwasta['num'];

$cariMHS= "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='MHS' AND ttilang.tgl_tilang='$tgltilang' ";
$resultMHS = mysql_query($cariMHS);
$resultMHS= mysql_fetch_assoc( $resultMHS );
$jmlMHS= $resultMHS['num'];

$cariPLJ= "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='PLJ' AND ttilang.tgl_tilang='$tgltilang' ";
$resultPLJ = mysql_query($cariPLJ);
$resultPLJ= mysql_fetch_assoc( $resultPLJ );
$jmlPLJ= $resultPLJ['num'];

  $cariTNI = "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='TNI' AND ttilang.tgl_tilang='$tgltilang' ";
$resultTNI = mysql_query($cariTNI);
$resultTNI= mysql_fetch_assoc( $resultTNI );
$jmlTNI = $resultTNI['num'];

$cariPolri= "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='Polri' AND ttilang.tgl_tilang='$tgltilang' ";
$resultPolri = mysql_query($cariPolri);
$resultPolri= mysql_fetch_assoc( $resultPolri );
$jmlPolri= $resultPolri['num'];

$cariLain= "SELECT DISTINCT count( * ) as num FROM ttilang,tmasyarakat WHERE ttilang.no_sim=tmasyarakat.no_sim AND tmasyarakat.pekerjaan='Lain-lain' AND ttilang.tgl_tilang='$tgltilang' ";
$resultLain = mysql_query($cariLain);
$resultLain= mysql_fetch_assoc( $resultLain );
$jmlLain= $resultLain['num'];
$total=$jmlpns+$jmlSwasta+$jmlMHS+$jmlPLJ+$jmlTNI+$jmlPolri+$jmlLain;
  //-----------------------//
 //Menghitung Total Akhir//
//---------------------//
$total_all=$total_all+$total;
$total_pns=$total_pns+$jmlpns;
$total_Swasta=$total_Swasta+$jmlSwasta;
$total_MHS=$total_MHS+$jmlMHS;
$total_PLJ=$total_PLJ+$jmlPLJ;
$total_TNI=$total_TNI+$jmlTNI;
$total_Polri=$total_Polri+$jmlPolri;
$total_Lain=$total_Lain+$jmlLain;
  //Menampilkan Data
  echo "
  <tr>
    <td><div align='center'>$i</div></td>
    <td><div align='center'>$tgl</div></td>
    <td><div align='center'>$total</div></td>
	<td><div align='center'>$jmlpns</div></td>
	<td><div align='center'>$jmlSwasta</div></td>
	<td><div align='center'>$jmlMHS</div></td>
	<td><div align='center'>$jmlPLJ</div></td>
	<td><div align='center'>$jmlTNI</div></td>
	<td><div align='center'>$jmlPolri</div></td>
	<td><div align='center'>$jmlLain</div></td>
    </tr>";
  $i++;
  }
  //Menampilkan Jumlah Data
   echo "
  <tr>
    <td><div align='center'></div></td>
    <td><div align='center'><b>JUMLAH</b></div></td>
    <td><div align='center'>$total_all</div></td>
	<td><div align='center'>$total_pns</div></td>
	<td><div align='center'>$total_Swasta</div></td>
	<td><div align='center'>$total_MHS</div></td>
	<td><div align='center'>$total_PLJ</div></td>
	<td><div align='center'>$total_TNI</div></td>
	<td><div align='center'>$total_Polri</div></td>
	<td><div align='center'>$total_Lain</div></td>
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

