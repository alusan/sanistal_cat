<?php
$fab_id = $_REQUEST['id'];
$res_fab = mysql_query("SELECT * FROM users WHERE user_id = '$fab_id'", $conn); 
$fab = mysql_fetch_array($res_fab);
?>
<h1>Opdater</h1>
<h2>Bruger</h2>
<form method="post" action="action_update.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Brugernavn:</p></td>
			<td><input type="text" name="name" value="<?php echo $fab['name']; ?>" /></td>
		</tr>
		<tr>
			<td><p>Kodeord:</p></td>
			<td><input type="text" name="pass" value="<?php echo $fab['pass']; ?>" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<p>
					<input type="radio" <?php if ($fab['rights'] == 1) { echo "checked='checked' ";} ?>name="rights" value="1">Admin<br>
					<input type="radio" <?php if ($fab['rights'] == 2) { echo "checked='checked' ";} ?>name="rights" value="2">Ansat
				</p>
			</td>
		</tr>
	</table>
	<input type="hidden" name="user_id" value="<?php echo $fab_id; ?>" />
	<input type="hidden" name="update" value="user" />
	<input type="submit" name="submit" value="Opdater Beklædning" />
</form>