<?php 
	$a_type = $_POST['loft_bund'];
	$a_length = nl2br($_POST['length_cm']);
	
	if ($a_type!=NULL && $a_length!=NULL) {
		mysql_query("INSERT INTO alulister (loft_bund, length_cm) VALUES('$a_type', '$a_length');") 
			or die(mysql_error());
	}
	
?>