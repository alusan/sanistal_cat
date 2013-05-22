<?php 
    $a_id = $_POST['alu_id'];
	$a_type = $_POST['loft_bund'];
	$a_length = nl2br($_POST['length_cm']);
	
	if ($a_id!=NULL && $a_type!=NULL && $a_length!=NULL) {
		mysql_query("UPDATE alulister SET loft_bund = '$a_type', length_cm = '$a_length' WHERE alu_id = '$a_id';") 
			or die(mysql_error());
	}
	
?>