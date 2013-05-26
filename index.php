<?php
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
	// username and password sent from Form
	$username = addslashes($_POST['username']);
	$pass = addslashes($_POST['password']);

	$check_query = "SELECT user_id FROM users WHERE name='$username' and pass='$pass'";
	$check_result = mysql_query($check_query);
	$check_row = mysql_fetch_array($check_result);
	$maxRowCount = mysql_num_rows($check_result);

	if($maxRowCount==1) {
		$_SESSION['login_user'] = $username;
		
		header("location: main.php");
	} else {
		$error="Your Login Name or Password is invalid";
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Sanistål Beklædningskatalog Login</title>
		<link rel="stylesheet" href="desktop.css" type="text/css" media="screen" />
	</head>
	<body class="loginbg">
		<div id="loginbox">
			<div id="lbox_top">
			</div>
			<div id="lbox_bottom">
			<form method="post" action="">
				<table width="250">
					<?php 
					if($_SERVER["REQUEST_METHOD"] == "POST") {
					echo "<tr><td height='22' colspan='2'><p class='errorm'>Indtastet forkert brugernavn/kodeord</p></td></tr>";
					} else {
						echo "<tr><td height='22' colspan='2'></td></tr>";
					}
					?>
					<tr>
						<td align="right"><p>Bruger:</p></td>
						<td><input name="username" type="text" /></td>
					</tr>
					<tr>
						<td align="right"><p>Kodeord:</p></td>
						<td><input name="password" type="password" /></td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Log ind" /></td>
					</tr>
				</table>
			</form>	
			</div>
		</div>
	</body>
</html>
<?php
mysql_close($conn);
?>