<?php 
	$m_id = $_POST['manufacturer_id']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($m_id!=NULL) {
		mysql_query("DELETE FROM fabrikant WHERE fabrikant_id = '$m_id' LIMIT 1") 
			or die(mysql_error());
	}
?>