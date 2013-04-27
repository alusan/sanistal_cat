<?php 
	$m_name = $_POST['manufacturer_name'];
	
	if ($m_name!=NULL) {
		mysql_query("INSERT INTO fabrikant (fabrikant_navn) VALUES('$m_name');") 
			or die(mysql_error());
	}
	
?>