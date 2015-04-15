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
$cari = mysql_query ("select * from ttilang,tmasyarakat,tkendaraan,tpetugas,tpasal where ttilang.no_sim=tmasyarakat.no_sim AND ttilang.no_pol=tkendaraan.no_pol AND ttilang.nrp=tpetugas.nrp AND ttilang.id_pasal=tpasal.id_pasal AND tgl_tilang between '$tgl_awal' and '$tgl_akhir' ORDER BY ttilang.tgl_tilang ASC");
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
.style10 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
</style>

	<table width="1117" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="103"><div align="center"><img src="../images/logo.png" width="56" height="66" /></div></td>
    <td width="762"><p align="center"><strong>KEPOLISIAN NEGARA REPUBLIK INDONESIA</strong></p>
      <p align="center"><strong>DAERAH SUMATERA BARAT</strong></p>
    <p align="center"><strong>RESORT BUKITTINGGI</strong></p>
    <p align="center" class="style10"><strong>LAPORAN TILANG</strong></p></td>
  </tr>
</table>
<h4 align="center"> 
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
<table width="1117" height="54" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="14" height="52"><div align="center"><span class="style10">No</span></div></td>
    <td width="34"><div align="center"><span class="style10">No Reg Tilang</span></div></td>
    <td width="21"><div align="center"><span class="style10">No SIM</span></div></td>
    <td width="64"><div align="center"><span class="style10">Nama Masyarakat</span></div></td>
    <td width="12"><div align="center"><span class="style10">JK</span></div></td>
    <td width="39"><div align="center"><span class="style10">Alamat</span></div></td>
    <td width="56"><div align="center"><span class="style10">Pekerjaan</span></div></td>
    <td width="62"><div align="center"><span class="style10">Pendidikan</span></div></td>
    <td width="30"><div align="center"><span class="style10">Umur</span></div></td>
    <td width="13"><div align="center">
      <p class="style10">Tempat Lahir</p>
      </div></td>
    <td width="13"><div align="center">
      <p class="style10">TTL</p>
    </div></td>
    <td width="20"><div align="center"><span class="style10">No Pol</span></div></td>
    <td width="60"><div align="center"><span class="style10">Jenis Kendaraan</span></div></td>
    <td width="60"><div align="center"><span class="style10">Merk Kendaraan</span></div></td>
    <td width="49"><div align="center"><span class="style10">Tanggal Tilang</span></div></td>
    <td width="33"><div align="center"><span class="style10">Jam</span></div></td>
    <td width="58"><div align="center"><span class="style10">Alamat Tilang</span></div></td>
    <td width="41"><div align="center"><span class="style10">NRP</span></div></td>
    <td width="64"><div align="center"><span class="style10">Nama Petugas</span></div></td>
    <td width="66"><div align="center"><span class="style10">Pangkat</span></div></td>
    <td width="63"><div align="center"><span class="style10">Jabatan</span></div></td>
    <td width="65"><div align="center"><span class="style10">Id Pasal</span></div></td>
    <td width="74"><div align="center"><span class="style10">Pasal Yang Dilangggar</span></div></td>
    <td width="58"><div align="center"><span class="style10">Denda</span></div></td>
  </tr>
   <p>
    <?php
  $i =1;
  while ($data =mysql_fetch_array($cari)) {
  $tgl = tgl_indo($data['tgl_tilang']);
  $totaldenda=$totaldenda+$data['besar_denda'];
  $totaldenda1=number_format($totaldenda,0,",",".");
  $besardenda=$data['besar_denda'];
  $besardenda1=number_format($besardenda,0,",",".");
   //Menampilkan Data
  echo "
  <tr>
    <td><div align='center'><span class='style10'>$i</span></div></td>
    <td><div align='center'><span class='style10'>$data[no_reg_tilang]</span></div></td>
	<td><div align='center'><span class='style10'>$data[no_sim]</span></div></td>
    <td><div align='center'><span class='style10'>$data[nama]</span></div></td>
	<td><div align='center'><span class='style10'>$data[JK]</span></div></td>
	<td><div align='center'><span class='style10'>$data[alamat]</span></div></td>
	<td><div align='center'><span class='style10'>$data[pekerjaan]</span></div></td>
	 <td><div align='center'><span class='style10'>$data[pendidikan]</span></div></td>
	<td><div align='center'><span class='style10'>$data[umur]</span></div></td>
	<td><div align='center'><span class='style10'>$data[tmp_lahir]</span></div></td>
	<td><div align='center'><span class='style10'>$data[ttl]</span></div></td>
	 <td><div align='center'><span class='style10'>$data[no_pol]</span></div></td>
	<td><div align='center'><span class='style10'>$data[jen_kendaraan]</span></div></td>
	<td><div align='center'><span class='style10'>$data[merk_kendaraan]</span></div></td>
	<td><div align='center'><span class='style10'>$data[tgl_tilang]</span></div></td>
	<td><div align='center'><span class='style10'>$data[jam_tilang]</span></div></td>
	<td><div align='center'><span class='style10'>$data[alamat_tilang]</span></div></td>
	<td><div align='center'><span class='style10'>$data[nrp]</span></div></td>
	<td><div align='center'><span class='style10'>$data[nama_petugas]</span></div></td>
	<td><div align='center'><span class='style10'>$data[pangkat]</span></div></td>
	<td><div align='center'><span class='style10'>$data[jabatan]</span></div></td>
	<td><div align='center'><span class='style10'>$data[id_pasal]</span></div></td>
	<td><div align='center'><span class='style10'>$data[psl_yangdilanggar]</span></div></td>
	<td><div align='center'><span class='style10'>$besardenda1</span></div></td>
    </tr>";
  $i++;
  }
    //Menampilkan Jumlah Data
    echo "
  <tr>
  <td><div align='center'></div></td>
    <td><div align='center'><span class='style10'><b>JUMLAH</b></span></div></td>
	<td><div align='center'></div></td>
    <td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	 <td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	 <td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'></div></td>
	<td><div align='center'><span class='style10'>$totaldenda1</span></div></td>
	</tr>";
  
  echo "</table>";
  }
  ?>
    <!--<a href="pdf_mysql.php">Cetak File PDF</a> -->
  </p>
</table>
<p></p>
<table width="1117" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="17"><div align="center"></div></td>
    <td width="38"><div align="center"></div></td>
    <td width="54"><div align="center"></div></td>
    <td width="76"><div align="center"></div></td>
    <td width="12"><div align="center"></div>     </td>
    <td width="13">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="12"><div align="center"></div>    </td>
    <td width="13">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="13">&nbsp;</td>
    <td width="118">&nbsp;</td>
    <td width="142">&nbsp;</td>
    <td width="96">&nbsp;</td>
    <td width="116">&nbsp;</td>
    <td width="21">&nbsp;</td>
    <td width="44">&nbsp;</td>
    <td width="267"><div align="right">Bukittinggi,
        <?php $today = date("j F Y"); echo $today;?>
    </div>
      <div align="center">
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
	  ?>
    </div></td>
  </tr>
  </table>

