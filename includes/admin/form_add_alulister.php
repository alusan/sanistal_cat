<h1>Tilføj</h1>
<h2>Aluliste</h2>
<form method="post" action="action_add.php">
	<table>
		<tr>
			<td><p>Type:</p></td>
			<td>
				<select name="loft_bund">
					<option value="Loft">Loft</option>
					<option value="Vognbund">Vognbund</option>
					<option value="Beklædning">Beklædning</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><p>Længde(r) i cm.:</p></td>
			<td>
				<textarea wrap="hard" name="length_cm" rows="10" cols="70"></textarea>
			</td>
		</tr>
	</table>
	<input type="hidden" name="add" value="alulister" />
	<input type="submit" name="submit" value="Tilføj Aluliste" />
</form>