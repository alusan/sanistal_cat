<?php
session_start();
$check_user = $_SESSION['login_user'];

$lock_query = mysql_query("select * from users where name='$check_user'");
$lock_row = mysql_fetch_array($lock_query);

$login_session = $lock_row['name'];

if(!isset($login_session))
{
	header("Location: index.php");
}
?>