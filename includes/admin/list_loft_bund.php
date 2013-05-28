<?php
$results_list = mysql_query("SELECT * FROM loft_bund ORDER BY bund_loft, sani_nr", $conn);

echo "<h1>Vognbunde</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<tr><td class='alu' align='center' colspan='5'><a href='main.php?adm=15'>Tilføj vognbund</a></td></tr>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Sani nr.:</p></td>";
echo "<td class='alu'><p>Billednavn:</p></td>";
echo "<tr>";

while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['sani_nr'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['billednavn'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=16&id=". $row_list['lb_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=17&id=". $row_list['lb_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";



?>