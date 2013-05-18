<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM fabrikant WHERE fabrikant_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Slet</h1>
<h2>Fabrikant</h2>
<form method="post" action="action_delete.php">
	<p>Er du sikker på, at du vil slette fabrikanten "<?php echo $fab['fabrikant_navn']; ?>"</p>

	<input type="hidden" name="delete" value="manufacturer" />
	<input type="hidden" name="manufacturer_id" value="<?php echo $fab_id; ?>" />
	<input type="submit" name="submit" value="Slet Fabrikant" />
</form>