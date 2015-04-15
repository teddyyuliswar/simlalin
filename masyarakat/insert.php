<?php
//panggil file config.php untuk menghubung ke server
include('../config/config.php');

//tangkap data dari form
$no_sim = $_POST['no_sim'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$JK = $_POST['JK'];
$pekerjaan = $_POST['pekerjaan'];
$pendidikan = $_POST['pendidikan'];
$umur = $_POST['umur'];
$tmp_lahir = $_POST['tmp_lahir'];
$ttl = $_POST['ttl'];

//simpan data ke database
$query = mysql_query("insert into tmasyarakat values('$no_sim', '$nama', '$alamat', '$JK', '$pekerjaan', '$pendidikan', '$umur', '$tmp_lahir', '$ttl')") or die(mysql_error());

if ($query) {
	header('location:index.php?message=success');
}
?>