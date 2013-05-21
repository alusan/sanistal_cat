<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM bekladninger WHERE be_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Opdater</h1>
<h2>Beklædning</h2>
<form method="post" action="action_update.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Sani nr.:</p></td>
			<td><input type="text" name="sani_nr" value="<?php echo $fab['sani_nr']; ?>" /></td>
		</tr>
		<tr>
			<td><p>Titel:</p></td>
			<td><input type="text" name="titel" value="<?php echo $fab['be_titel']; ?>" /></td>
		</tr>
		<tr>
			<td><p>Prioritet (1 eller større):</p></td>
			<td><input type="text" name="prioritet" value="<?php echo $fab['prioritet']; ?>" /></td>
		</tr>
		<tr>
			<td><p>Billede:</p></td>
			<td>
				<input type="file" name="be_image"><!-- upload af billede her -->
			</td>
		</tr>
	</table>
	<input type="hidden" name="be_id" value="<?php echo $fab_id; ?>" />
	<input type="hidden" name="imgname" value="<?php echo $fab['billednavn']; ?>" />
	<input type="hidden" name="update" value="beklaedninger" />
	<input type="submit" name="submit" value="Opdater Beklædning" />
</form>