<?php 
	$lb_sani = $_POST['loft_bund_sani_nr']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($lb_sani!=NULL) {
		mysql_query("DELETE FROM loft_bund WHERE sani_nr = '$lb_sani' LIMIT 1;") 
			or die(mysql_error());
	}
?>