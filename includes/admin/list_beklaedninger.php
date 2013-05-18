<?php
$results_list = mysql_query("SELECT * FROM bekladninger ORDER BY sani_nr, prioritet", $conn);

echo "<h1>Beklædninger</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<td class='alu' align='center' colspan='6'><a href='main.php?adm=18'>Tilføj beklædning</a></td>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Sani nr.:</p></td>";
echo "<td class='alu'><p>Titel</p></td>";
echo "<td class='alu'><p>Prioritet</p></td>";
echo "<td class='alu'><p>Bilednavn</p></td>";
echo "<tr>";

while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['sani_nr'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['be_titel'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['prioritet'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['billednavn'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=19&id=". $row_list['sani_nr'] ."&pri=" . $row_list['prioritet'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=20&id=". $row_list['sani_nr'] ."&pri=" . $row_list['prioritet'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";



?>