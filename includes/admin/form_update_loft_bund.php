<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM loft_bund WHERE lb_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
$lb = $fab['bund_loft'];
?>
<h1>Opdater</h1>
<h2>Vognbund</h2>
<form method="post" action="action_update.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Sani nr.:</p></td>
			<td><input type="text" name="sani_nr" value="<?php echo $fab['sani_nr']; ?>" /></td>
		</tr>
		<tr>
			<td><p>Billede (jpg, gif el. png):</p></td>
			<td>
				<input type="file" name="lb_image"><!-- upload af billede her -->
			</td>
		</tr>
	</table>
	<input type="hidden" name="lb_id" value="<?php echo $fab_id; ?>" />
	<input type="hidden" name="bund_loft" value="VOGNBUND" />
	<input type="hidden" name="imgname" value="<?php echo $fab['billednavn']; ?>" />
	<input type="hidden" name="update" value="loft_bund" />
	<input type="submit" name="submit" value="Opdater Vognbund" />
</form>