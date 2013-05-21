<?php
$results_list = mysql_query("SELECT * FROM fabrikant ORDER BY fabrikant_navn", $conn);

echo "<h1>Fabrikanter</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<td class='alu' align='center' colspan='3'><a href='main.php?adm=6'>Tilføj fabrikant</a></td>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Bilfabrikant:</p></td>";
echo "<tr>";

while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['fabrikant_navn'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=7&id=". $row_list['fabrikant_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=8&id=". $row_list['fabrikant_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";



?>