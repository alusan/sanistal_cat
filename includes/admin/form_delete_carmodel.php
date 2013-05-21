<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM biler WHERE bil_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Slet</h1>
<h2>Bilmodel</h2>
<form method="post" action="action_delete.php">
	<p>Er du sikker på, at du vil slette: <?php echo '"' . $fab['bil_navn'] . '"' . " og dens tilhørende billede: " . '"' . $fab['billedenavn'] . '"'; ?>"</p>

	<input type="hidden" name="delete" value="carmodel" />
	<input type="hidden" name="bil_id" value="<?php echo $fab_id; ?>" />
	<input type="submit" name="submit" value="Slet Bilmodel" />
</form>