<?php 
include('../config/config.php');
include('../config/cek-login.php');
include('func.php');
include('func_2.php');
include('func_3.php');
include('func_4.php');
include('dbcon.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('#wait_1').hide();
	$('#no_sim').change(function(){
	  $('#wait_1').show();
	  $('#result_1').hide();
      $.get("func.php", {
		func: "no_sim",
		drop_var: $('#no_sim').val()
      }, function(response){
        $('#result_1').fadeOut();
        setTimeout("finishAjax1('result_1', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax1(id, response) {
  $('#wait_1').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>
<script type="text/javascript">
$(document).ready(function() {
	$('#wait_2').hide();
	$('#no_pol').change(function(){
	  $('#wait_2').show();
	  $('#result_2').hide();
      $.get("func_2.php", {
		func_2: "no_pol",
		drop_var: $('#no_pol').val()
      }, function(response){
        $('#result_2').fadeOut();
        setTimeout("finishAjax2('result_2', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax2(id, response) {
  $('#wait_2').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>

<script type="text/javascript">
$(document).ready(function() {
	$('#wait_3').hide();
	$('#nrp').change(function(){
	  $('#wait_3').show();
	  $('#result_3').hide();
      $.get("func_3.php", {
		func_3: "nrp",
		drop_var: $('#nrp').val()
      }, function(response){
        $('#result_3').fadeOut();
        setTimeout("finishAjax3('result_3', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax3(id, response) {
  $('#wait_3').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>

<script type="text/javascript">
$(document).ready(function() {
	$('#wait_4').hide();
	$('#id_pasal').change(function(){
	  $('#wait_4').show();
	  $('#result_4').hide();
      $.get("func_4.php", {
		func_4: "id_pasal",
		drop_var: $('#id_pasal').val()
      }, function(response){
        $('#result_4').fadeOut();
        setTimeout("finishAjax4('result_4', '"+escape(response)+"')", 400);
      });
    	return false;
	});
});

function finishAjax4(id, response) {
  $('#wait_4').hide();
  $('#'+id).html(unescape(response));
  $('#'+id).fadeIn();
}
</script>
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
$no_reg_tilang= $_GET['no_reg_tilang'];

$query = mysql_query("select * from ttilang where no_reg_tilang='$no_reg_tilang'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../tilang/update.php" method="post">
<input type="hidden" name="no_reg_tilang" value="<?php echo $no_reg_tilang; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    		<tr>
        	<td>No. Reg Tilang</td>
        	<td>:</td>
        	<td><input type="text" name="no_reg_tilang" maxlength="30" required="required" value="<?php echo $data['no_reg_tilang']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>N0. SIM</td>
        	<td>:</td>
        	<td><input type="text" name="no_sim" maxlength="30" required="required" value="<?php echo $data['no_sim']; ?>" /></td>
        
		</tr>
    	<tr>
        	<td>No. Polisi</td>
        	<td>:</td>
        	<td><input type="text" name="no_pol" maxlength="30" required="required" value="<?php echo $data['no_pol']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Tanggal Tilang</td>
        	<td>:</td>
        	<!--<td><input type="text" name="tgl_tilang" required="required" maxlength="30" value="<?php echo $data['tgl_tilang']; ?>" /></td>-->
			<td><input type="text" name="tgl_tilang" equired="required" value="<?php echo $data['tgl_tilang']; ?>" onClick="if(self.gfPop)gfPop.fPopCalendar(document.update_data.tgl_tilang);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.update_data.tgl_tilang);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>

        </tr>
		<tr>
        	<td>Jam Tilang</td>
        	<td>:</td>
        	<td><input type="text" name="jam_tilang" required="required" maxlength="30" value="<?php echo $data['jam_tilang']; ?>" /></td>
        </tr>
    	<tr>
        	<td>Alamat Tilang</td>
        	<td>:</td>
        	<td><input type="text" name="alamat_tilang" required="required" maxlength="30"value="<?php echo $data['alamat_tilang']; ?>" /></td>
        </tr>
    	<tr>
        	<td>NRP</td>
        	<td>:</td>
        	<td><input type="text" name="nrp" required="required" maxlength="30" value="<?php echo $data['nrp']; ?>" /></td>
        </tr>
		<tr>
        	<td>ID Pasal</td>
        	<td>:</td>
        	<td><input type="text" name="id_pasal" required="required" maxlength="30" value="<?php echo $data['id_pasal']; ?>" /></td>
        </tr>
    	
        <tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
</table>
</form>

<a href="../tilang/view.php">Lihat Data</a>
</div>
  </div>
</div>
 <?php include "footer.php" ?> 
 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
</body>
</html>