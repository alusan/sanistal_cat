<?php
$results_list = mysql_query("SELECT * FROM users ORDER BY rights, name", $conn);

echo "<h1>Brugere</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<tr><td class='alu' align='center' colspan='4'><a href='main.php?adm=22'>Tilføj Bruger</a></td></tr>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Brugernavn:</p></td>";
echo "<td class='alu'><p>Rettigheder:</p></td>";
echo "<tr>";

while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['name'] . "</p></td>";
	echo "<td class='alu'><p>";
	if ($row_list['rights']==1) {
		echo "<i>Admin</i>";
	} else {
		echo "<i>Ansat</i>";	
	}
	echo "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=23&id=". $row_list['user_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=24&id=". $row_list['user_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";



?>