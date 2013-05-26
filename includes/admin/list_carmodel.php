<?php
$results_list = mysql_query("SELECT *
								FROM fabrikant, biler
								WHERE fabrikant.fabrikant_id = biler.fabrikant_id
								ORDER BY fabrikant_navn, bil_navn", $conn); 
echo "<h1>Bilmodeller</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<tr><td class='alu' align='center' colspan='4'><a href='main.php?adm=9'>Tilføj bilmodel</a></td></tr>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Bilfabrikant:</p></td>";
echo "<td class='alu'><p>Bilnavn:</p></td>";
echo "<tr>";

while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['fabrikant_navn'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['bil_navn'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=10&id=". $row_list['bil_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=11&id=". $row_list['bil_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";



?>