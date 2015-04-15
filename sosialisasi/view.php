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

<table border="1" cellpadding="2" cellspacing="0">
	<thead>
    	<tr>
        	<td>No.</td>
        	<td>Kode Sosialisasi</td>
        	<td>Tanggal Sosialisasi</td>
        	<td>Kegiatan</td>
        	<td>Materi</td>
        	<td>ID Instansi</td>
        	<td>NRP</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from tsosialisasi");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['kd_sosialisasi']; ?></td>
        	<td><?php echo $data['tgl_sosialisasi']; ?></td>
        	<td><?php echo $data['kegiatan']; ?></td>
        	<td><?php echo $data['materi']; ?></td>
        	<td><?php echo $data['id_instansi']; ?></td>
        	<td><?php echo $data['nrp']; ?></td>
		 	<td>
            	<a href="edit.php?kd_sosialisasi=<?php echo $data['kd_sosialisasi']; ?>">Edit</a> | 
                <a href="delete.php?kd_sosialisasi=<?php echo $data['kd_sosialisasi']; ?>">Hapus</a>
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