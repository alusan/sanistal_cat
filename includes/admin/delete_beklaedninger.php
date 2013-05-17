<?php 
	$be_sani = $_POST['beklaedninger_sani_nr']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($be_sani!=NULL) {
		mysql_query("DELETE FROM bekladninger WHERE sani_nr = '$be_sani';") 
			or die(mysql_error());
	}
?>