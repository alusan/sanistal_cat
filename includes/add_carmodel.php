<?php 
	$cm_name = $_POST['carmodel_name'];
	
	if ($cm_name!=NULL) {
		mysql_query("INSERT INTO biler (bil_navn) VALUES('$cm_name');") 
			or die(mysql_error());
	}
	
?>