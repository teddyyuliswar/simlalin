<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne4()
{
	$result = mysql_query("SELECT DISTINCT id_pasal, psl_yangdilanggar FROM tpasal ORDER BY lpad(id_pasal, 10, 0)") 
	or die(mysql_error());

	  while($rows = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$rows['id_pasal'].'">'.$rows['id_pasal'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func_4'] == "id_pasal" && isset($_GET['func_4'])) { 
   id_pasal($_GET['drop_var']); 
}

function id_pasal($drop_var)
{  
    include_once('dbcon.php');
	$result = mysql_query("SELECT * FROM tpasal WHERE id_pasal='$drop_var'") 
	or die(mysql_error());
	while($drop_2 = mysql_fetch_array( $result )) 
	{
	
	echo '<input type="text" size="50" value="'.$drop_2['psl_yangdilanggar'].'" disabled="disabled">';
	
	
	
	}
	
	//echo '</select> ';
   
}
?>