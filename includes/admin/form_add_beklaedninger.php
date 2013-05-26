<h1>Tilføj</h1>
<h2>Beklædning</h2>
<form method="post" action="action_add.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Sani nr.:</p></td>
			<td><input type="text" name="sani_nr" /></td>
		</tr>
		<tr>
			<td><p>Titel:</p></td>
			<td><input type="text" name="titel" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<p>
					<input type="radio" checked="checked" name="type" value="1">Beklædning<br>
					<input type="radio" name="type" value="2">Loft
				</p>
			</td>
		</tr>
		<tr>
			<td><p>Prioritet (1 eller større):</p></td>
			<td><input type="text" name="prioritet" /></td>
		</tr>
		<tr>
			<td><p>Billede (jpg, gif el. png):</p></td>
			<td>
				<input type="file" name="be_image"><!-- upload af billede her -->
			</td>
		</tr>
	</table>
	<input type="hidden" name="add" value="beklaedninger" />
	<input type="submit" name="submit" value="Tilføj Beklædning" />
</form>