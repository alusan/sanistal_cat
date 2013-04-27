<?php 
	$b_sani = $_POST['beklaedninger_sani_nr'];
	
	if ($m_name!=NULL) {
		mysql_query("INSERT INTO biler (beklaedninger_sani_nr) VALUES('$b_sani');") 
			or die(mysql_error());
	}
	
?>