<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM bekladninger WHERE be_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Slet</h1>
<h2>Beklædning</h2>
<form method="post" action="action_delete.php">
	<p>Er du sikker på, at du vil slette: <?php echo '"' . $fab['be_titel'] . '"' . " og dens tilhørende billede: " . '"' . $fab['billednavn'] . '"'; ?>"</p>

	<input type="hidden" name="delete" value="beklaedninger" />
	<input type="hidden" name="be_id" value="<?php echo $fab_id; ?>" />
	<input type="submit" name="submit" value="Slet Beklædning" />
</form>