<?php 
	$a_navn = $_POST['alu_navn'];
	$a_type = $_POST['loft_bund'];
	$a_length = $_POST['length_cm'];
	
	if ($a_navn!=NULL && $a_type!=NULL && $a_length!=NULL) {
		mysql_query("INSERT INTO alulister (alu_navn, loft_bund, length_cm) VALUES('$a_navn', '$a_type', '$a_length');") 
			or die(mysql_error());
	}
	
?>