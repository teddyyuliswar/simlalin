<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne3()
{
	$result = mysql_query("SELECT DISTINCT nrp, nama_petugas FROM tpetugas ORDER BY lpad(nrp, 10, 0)") 
	or die(mysql_error());

	  while($rows = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$rows['nrp'].'">'.$rows['nrp'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func_3'] == "nrp" && isset($_GET['func_3'])) { 
   nrp($_GET['drop_var']); 
}

function nrp($drop_var)
{  
    include_once('dbcon.php');
	$result = mysql_query("SELECT * FROM tpetugas WHERE nrp='$drop_var'") 
	or die(mysql_error());
	while($drop_2 = mysql_fetch_array( $result )) 
	{
	
	echo '<input type="text" size="50" value="'.$drop_2['nama_petugas'].'" disabled="disabled">';
	
	
	
	}
	
	//echo '</select> ';
   
}
?>