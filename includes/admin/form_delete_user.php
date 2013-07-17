<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM users WHERE user_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Slet</h1>
<h2>Bruger</h2>
<form method="post" action="action_delete.php">
	<p>Er du sikker på, at du vil slette brugeren "<?php echo $fab['name']; ?>"</p>

	<input type="hidden" name="delete" value="user" />
	<input type="hidden" name="user_id" value="<?php echo $fab_id; ?>" />
	<input type="submit" name="submit" value="Slet Bruger" />
</form>