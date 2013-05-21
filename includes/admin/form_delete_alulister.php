<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM alulister WHERE alu_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Slet</h1>
<h2>Aluliste</h2>
<form method="post" action="action_delete.php">
	<p>Er du sikker på, at du vil slette alulisten:<br /> "<?php echo $fab['loft_bund'] . " - " . $fab['length_cm']; ?>"</p>

	<input type="hidden" name="delete" value="alulister" />
	<input type="hidden" name="alu_id" value="<?php echo $fab_id; ?>" />
	<input type="submit" name="submit" value="Slet Aluliste" />
</form>