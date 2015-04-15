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
        	<td>No. Reg Tilang</td>
        	<td>No. SIM</td>
        	<td>No. Pol</td>
        	<td>Tanggal Tilang</td>
        	<td>Jam Tilang</td>
        	<td>Alamat Tilang</td>
			<td>NRP</td>
        	<td>ID Pasal</td>
        	<td>Opsi</td>
        </tr>
    </thead>
    <tbody>
    <?php 
	$query = mysql_query("select * from ttilang");
	
	$no = 1;
	while ($data = mysql_fetch_array($query)) {
	?>
    	<tr>
        	<td><?php echo $no; ?></td>
        	<td><?php echo $data['no_reg_tilang']; ?></td>
        	<td><?php echo $data['no_sim']; ?></td>
        	<td><?php echo $data['no_pol']; ?></td>
        	<td><?php echo $data['tgl_tilang']; ?></td>
        	<td><?php echo $data['jam_tilang']; ?></td>
        	<td><?php echo $data['alamat_tilang']; ?></td>
			<td><?php echo $data['nrp']; ?></td>
        	<td><?php echo $data['id_pasal']; ?></td>
        	<td>
            	<a href="edit.php?no_reg_tilang=<?php echo $data['no_reg_tilang']; ?>">Edit</a> | 
                <a href="delete.php?no_reg_tilang=<?php echo $data['no_reg_tilang']; ?>">Hapus</a>
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