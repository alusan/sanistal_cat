<?php 
	$u_id = $_POST['user_id']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($u_id!=NULL) {
		mysql_query("DELETE FROM users WHERE user_id = '$u_id' LIMIT 1;") 
			or die(mysql_error());
	}
?>