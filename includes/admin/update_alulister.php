<?php 
    $a_id = $_POST['alu_id'];
	$a_navn = $_POST['alu_navn'];
	$a_type = $_POST['loft_bund'];
	$a_length = $_POST['length_cm'];
	
	if ($a_id!=NULL && $a_navn!=NULL && $a_type!=NULL && $a_length!=NULL) {
		mysql_query("UPDATE alulister SET alu_navn = '$a_navn', loft_bund = '$a_type', length_cm = '$a_length' WHERE alu_id = '$a_id';") 
			or die(mysql_error());
	}
	
?>