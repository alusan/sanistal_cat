<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM loft_bund WHERE lb_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Slet</h1>
<h2>Loft/Vognbund</h2>
<form method="post" action="action_delete.php">
	<p>Er du sikker på, at du vil slette: <?php echo '"' . $fab['bund_loft'] . '"' . " og dens tilhørende billede: " . '"' . $fab['billednavn'] . '"'; ?>"</p>

	<input type="hidden" name="delete" value="loft_bund" />
	<input type="hidden" name="lb_id" value="<?php echo $fab_id; ?>" />
	<input type="submit" name="submit" value="Slet Loft/Bund" />
</form>