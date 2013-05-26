<?php 
	$u_name = $_POST['name'];
	$u_pass = $_POST['pass'];
	$u_rights = $_POST['rights'];
	
	if ($u_name!=NULL && $u_pass!=NULL && $u_rights!=NULL) {
		mysql_query("INSERT INTO users (name, pass, rights) VALUES('$u_name', '$u_pass', '$u_rights');") 
			or die(mysql_error());
	}
	
?>