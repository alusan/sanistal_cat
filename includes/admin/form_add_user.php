<h1>Tilføj</h1>
<h2>Bruger</h2>
<form method="post" action="action_add.php" enctype="multipart/form-data">
	<table>
		<tr>
			<td><p>Brugernavn:</p></td>
			<td><input type="text" name="name" /></td>
		</tr>
		<tr>
			<td><p>Kodeord:</p></td>
			<td><input type="text" name="pass" /></td>
		</tr>
		<tr>
			<td></td>
			<td>
				<p>
					<input type="radio" name="rights" value="1">Admin<br>
					<input type="radio" checked="checked" name="rights" value="2">Ansat
				</p>
			</td>
		</tr>
	</table>
	<input type="hidden" name="add" value="user" />
	<input type="submit" name="submit" value="Tilføj Bruger" />
</form>