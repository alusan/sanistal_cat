<?php 
	$a_id = $_POST['alu_id']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($a_id!=NULL) {
		mysql_query("DELETE FROM alulister WHERE alu_id = '$a_id' LIMIT 1;") 
			or die(mysql_error());
	}
?>