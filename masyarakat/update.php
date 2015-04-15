<?php
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


//update data di database sesuai user_id
$query = mysql_query("update tmasyarakat set no_sim='$no_sim', nama='$nama', alamat='$alamat', JK='$JK', pekerjaan='$pekerjaan', pendidikan='$pendidikan', umur='$umur', tmp_lahir='$tmp_lahir', ttl='$ttl'  where no_sim='$no_sim'") or die(mysql_error());

if ($query) {
	header('location:view.php?message=success');
}
?>