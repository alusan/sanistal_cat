<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM alulister WHERE alu_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
$lb = $fab['loft_bund'];
?>
<h1>Opdater</h1>
<h2>Aluliste</h2>
<form method="post" action="action_update.php">
	<table>
		<tr>
			<td><p>Type:</p></td>
			<td>
				<select name="loft_bund">
					<option<?php if ($lb=="Loft") { echo " selected='selected'"; } ?> value="Loft">Loft</option>
					<option<?php if ($lb=="Vognbund") { echo " selected='selected'"; } ?> value="Vognbund">Vognbund</option>
					<option<?php if ($lb=="Beklædning") { echo " selected='selected'"; } ?> value="Beklædning">Beklædning</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><p>Længde(r) i cm.:</p></td>
			<td>
				<textarea name="length_cm" rows="10" cols="30"><?php echo $fab['length_cm']; ?></textarea>
			</td>
		</tr>
	</table>
	<input type="hidden" name="alu_id" value="<?php echo $fab_id; ?>" />
	<input type="hidden" name="update" value="alulister" />
	<input type="submit" name="submit" value="Opdater Aluliste" />
</form>