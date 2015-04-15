<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne2()
{
	$result = mysql_query("SELECT DISTINCT no_pol, merk_kendaraan FROM tkendaraan ORDER BY lpad(no_pol, 10, 0)") 
	or die(mysql_error());

	  while($rows = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$rows['no_pol'].'">'.$rows['no_pol'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func_2'] == "no_pol" && isset($_GET['func_2'])) { 
   no_pol($_GET['drop_var']); 
}

function no_pol($drop_var)
{  
    include_once('dbcon.php');
	$result = mysql_query("SELECT * FROM tkendaraan WHERE no_pol='$drop_var'") 
	or die(mysql_error());
	while($drop_2 = mysql_fetch_array( $result )) 
	{
	
	echo '<input type="text" size="50" value="'.$drop_2['merk_kendaraan'].'" disabled="disabled">';
	
	
	//echo '<select name="nama" id="nama">';
	
	//echo '<option value="'.$drop_2['nama'].'" disabled="disabled">'.$drop_2['nama'].'</option>';
	}
	
	//echo '</select> ';
   
}
?>