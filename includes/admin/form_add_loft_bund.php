<h1>Tilføj</h1>
<h2>Loft/Vognbund</h2>
<form method="post" action="action_add.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Sani nr.:</p></td>
			<td><input type="text" name="sani_nr" /></td>
		</tr>
		<tr>
			<td><p>Type:</p></td>
			<td>
				<select name="bund_loft">
					<option value="LOFT">Loft</option>
					<option value="VOGNBUND">Vognbund</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><p>Billede (jpg, gif el. png):</p></td>
			<td>
				<input type="file" name="lb_image"><!-- upload af billede her -->
			</td>
		</tr>
	</table>
	<input type="hidden" name="add" value="loft_bund" />
	<input type="submit" name="submit" value="Tilføj Loft/Bund" />
</form>