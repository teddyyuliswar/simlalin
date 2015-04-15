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
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>

<a href="index.php">+ Tambah Data</a>

<table border="1" cellpadding="5" cellspacing="0">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Nomor Polisi</td>
        	<td>Jenis Kendaraan</td>
        	<td>Merk Kendaraan</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from tkendaraan");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['no_pol']; ?></td>
        	<td><?php echo $data['jen_kendaraan']; ?></td>
        	<td><?php echo $data['merk_kendaraan']; ?></td>
        	<td>
            	<a href="edit.php?no_pol=<?php echo $data['no_pol']; ?>">Edit</a> || 
                <a href="delete.php?no_pol=<?php echo $data['no_pol']; ?>">Hapus</a>
            </td>
        </tr>
    <?php 
		$no++;
	} 
	?>
    </tbody>
</table>
</body>
</html>