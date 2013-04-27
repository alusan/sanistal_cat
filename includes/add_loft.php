<?php 
	$l_sani = $_POST['loft_sani_nr'];
	
	if ($m_name!=NULL) {
		mysql_query("INSERT INTO biler (loft_sani_nr) VALUES('$l_sani');") 
			or die(mysql_error());
	}
	
?>