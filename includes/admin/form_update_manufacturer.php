<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM fabrikant WHERE fabrikant_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Opdater</h1>
<h2>Bilfabrikant</h2>
<form method="post" action="action_update.php">
	<table>
		<tr>
			<td><p>Fabrikantnavn:</p></td>
			<td><input type="text" name="manufacturer_name" value="<?php echo $fab['fabrikant_navn']; ?>" /></td>
		</tr>
	</table>
	<input type="hidden" name="manufacturer_id" value="<?php echo $fab_id; ?>" />
	<input type="hidden" name="update" value="manufacturer" />
	<input type="submit" name="submit" value="Opdater Bilfabrikant" />
</form>