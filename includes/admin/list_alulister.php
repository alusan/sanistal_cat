<?php
$results_list = mysql_query("SELECT * FROM alulister ORDER BY loft_bund", $conn);

echo "<h1>Alulister</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<tr><td class='alu' align='center' colspan='4'><a href='main.php?adm=12'>Tilføj aluliste</a></td></tr>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Type:</p></td>";
echo "<td class='alu'><p>Længde i cm.:</p></td>";
echo "<tr>";

while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['loft_bund'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['length_cm'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=13&id=". $row_list['alu_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=14&id=". $row_list['alu_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";



?>