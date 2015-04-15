<?php
//memanggil class ezpdf
include('../config/config.php');
include ('class.ezpdf.php');
include('../config/fungsi_indotgl.php');

//menciptakan objek pdf
$pdf	= new Cezpdf();

$r	= mysql_query("select*from tsosialisasi");

$no	= 1;
while($s = mysql_fetch_array($r)){
	$tgl = tgl_indo($s['tgl_sosialisasi']);
	$data[$no]=array(
				'No' => $no,
				'NRP' => $s[nrp],
				'ID Instansi' => $s[id_instansi],
				'Tanggal Sosialisasi' => $tgl,
				'Kegiatan' => $s[kegiatan],
				'Materi' => $s[materi],
			);
$no++;
}
$options=array('shaded'=>0, 'width'=>400);
//tampilkan data dalam tabel
$pdf->ezTable($data, '', 'LAPORAN SOSIALISASI', $options);
//tampilkan dokumen pdf pada browser
$pdf->ezStream();
?>
