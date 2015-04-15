<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
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
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil menambah data!</h3>';
}

echo "Selamat Datang <i>".$_SESSION['username']."</i>";
?>

<form name="input_data" action="../tilang/insert.php" method="post">
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td width="106">No. Reg Tilang</td>
        	<td width="6">:</td>
        	<td width="208"><input name="no_reg_tilang" type="text" id="no_reg_tilang" maxlength="30" required="required" /></td>
        </tr>
    	   	<tr>
        	<td>No. SIM</td>
        	<td>:</td>
        	<!--<td><input name="no_sim" type="text" id="no_sim" maxlength="30" required="required" /></td> -->
			  <td>
			 <select name="no_sim" id="no_sim">
    
      <option value="" selected="selected" disabled="disabled">Pilih Nomor SIM</option>
      
      <?php getTierOne(); ?>
    
       </select> 
	<td>
	<span id="wait_1" style="display: none;">
    <img alt="Please Wait" src="ajax-loader.gif"/>
    </span>
	</td>
	<td>
    <span id="result_1" style="display: none;"></span> 
    </td>	
    </tr>
        </tr>
    	
    	<tr>
        	<td>No. Polisi</td>
        	<td>:</td>
<!--<td><input name="no_pol" type="text" id="no_pol" maxlength="30" required="required" /></td> -->
        				  <td>
			 <select name="no_pol" id="no_pol">
    
      <option value="" selected="selected" disabled="disabled">Pilih Nomor Kendaraan</option>
      
      <?php getTierOne2(); ?>
    
    </select> 
	<td>
	<span id="wait_2" style="display: none;">
    <img alt="Please Wait" src="ajax-loader.gif"/>
    </span>
	</td>
	<td>
    <span id="result_2" style="display: none;"></span> 
    </td>	
    </tr>
		
		</tr>
    	<tr>
        	<td>Tanggal Tilang</td>
        	<td>:</td>
        	<!--<td><input name="tgl_tilang" type="text" id="tgl_tilang" maxlength="30" required="required" /></td>-->
        <td><input type="text" id="tgl_tilang" name="tgl_tilang" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_tilang);return false;"/><a href="javascript:void(0)" onClick="if(self.gfPop)gfPop.fPopCalendar(document.input_data.tgl_tilang);return false;"><img name="popcal" align="absmiddle" style="border:none" src="calender/calender.jpeg" width="34" height="29" border="0" alt=""></a> </td>
		</tr>
		<tr>
        	<td>Jam Tilang</td>
        	<td>:</td>
        	<td><input name="jam_tilang" type="text" id="jam_tilang" maxlength="30" required="required" /></td>
        </tr>
    	
    	<tr>
        	<td>Alamat Tilang</td>
        	<td>:</td>
        	<td><input name="alamat_tilang" type="text" id="alamat_tilang" maxlength="30" required="required" /></td>
        </tr>
    	
    	<tr>
        	<td>NRP Petugas</td>
        	<td>:</td>
        	<!--<td><input name="nrp" type="text" id="nrp" maxlength="30" required="required" /></td>-->
        			  <td>
			 <select name="nrp" id="nrp">
    
      <option value="" selected="selected" disabled="disabled">Pilih NRP Petugas</option>
      
      <?php getTierOne3(); ?>
    
    </select> 
	<td>
	<span id="wait_3" style="display: none;">
    <img alt="Please Wait" src="ajax-loader.gif"/>
    </span>
	</td>
	<td>
    <span id="result_3" style="display: none;"></span> 
    </td>	
  </tr>
		
		 	<tr>
        	<td>ID Pasal</td>
        	<td>:</td>
<!--<td><input name="id_pasal" type="text" id="id_pasal" maxlength="30" required="required" /></td> -->
				
        	   
        				  <td>
			 <select name="id_pasal" id="id_pasal">
    
      <option value="" selected="selected" disabled="disabled">Pilih Pasal yang Dilanggar</option>
      
      <?php getTierOne4(); ?>
    
    </select> 
	<td>
	<span id="wait_4" style="display: none;">
    <img alt="Please Wait" src="ajax-loader.gif"/>
    </span>
	</td>
	<td>
    <span id="result_4" style="display: none;"></span> 
    </td>	
    </tr>
        <tr>
        	<td align="right" colspan="3"><div align="center">
        	  <input type="submit" name="submit" value="Simpan" />
      	  </div></td>
        </tr>
    </tbody>
</table>
</form>
 
		
  <p><img src="loader.gif" id="loading" align="absmiddle" style="display:none;"/>       </p>
	<a href="view.php">Lihat Data</a>  
  	</div>
  </div>
</div>

 <?php include "footer.php" ?> 
 <iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

</body>
</html>
