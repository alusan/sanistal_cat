<?php
    $u_id = $_POST['user_id']; 
	$u_name = $_POST['name'];
	$u_pass = $_POST['pass'];
	$u_rights = $_POST['rights'];
	
	if ($u_id!=NULL && $u_name!=NULL && $u_pass!=NULL && $u_rights!=NULL) {
		mysql_query("UPDATE users SET name = '$u_name', pass = '$u_pass', rights = '$u_rights' WHERE user_id = '$u_id';") 
			or die(mysql_error());
	}
	
?>