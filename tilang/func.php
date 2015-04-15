<?php
//**************************************
//     Page load dropdown results     //
//**************************************
function getTierOne()
{
	$result = mysql_query("SELECT DISTINCT no_sim, nama FROM tmasyarakat ORDER BY lpad(no_sim, 10, 0)") 
	or die(mysql_error());

	  while($rows = mysql_fetch_array( $result )) 
  
		{
		   echo '<option value="'.$rows['no_sim'].'">'.$rows['no_sim'].'</option>';
		}

}

//**************************************
//     First selection results     //
//**************************************
if($_GET['func'] == "no_sim" && isset($_GET['func'])) { 
   no_sim($_GET['drop_var']); 
}

function no_sim($drop_var)
{  
    include_once('dbcon.php');
	$result = mysql_query("SELECT * FROM tmasyarakat WHERE no_sim='$drop_var'") 
	or die(mysql_error());
	while($drop_2 = mysql_fetch_array( $result )) 
	{
	
	echo '<input type="text" size="50" value="'.$drop_2['nama'].'" disabled="disabled">';
	
	
	//echo '<select name="nama" id="nama">';
	
	//echo '<option value="'.$drop_2['nama'].'" disabled="disabled">'.$drop_2['nama'].'</option>';
	}
	
	//echo '</select> ';
   
}
?>