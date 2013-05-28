<?php
$results_list = mysql_query("SELECT * FROM bekladninger WHERE type = '1' ORDER BY sani_nr, prioritet", $conn);
echo "<h1>Beklædninger / Lofter</h1>";
echo "<h2>Admin</h2>";
echo "<table class='dblist'>";
echo "<tr><td class='alu' align='center' colspan='6'><a href='main.php?adm=18'>Tilføj beklædning / loft</a></td></tr>";
echo "<tr><td class='alu' colspan='6'><p class='list_title'>Beklædninger</p></tr>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Sani nr.:</p></td>";
echo "<td class='alu'><p>Titel:</p></td>";
echo "<td class='alu'><p>Prioritet:</p></td>";
echo "<td class='alu'><p>Billednavn:</p></td>";
echo "<tr>";
while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['sani_nr'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['be_titel'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['prioritet'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['billednavn'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=19&id=". $row_list['be_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=20&id=". $row_list['be_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";


$results_list = mysql_query("SELECT * FROM bekladninger WHERE type = '2' ORDER BY sani_nr, prioritet", $conn);
echo "<table class='dblist'>";
echo "<tr><td class='alu' colspan='6'><p class='list_title'>Lofter</p></tr>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Sani nr.:</p></td>";
echo "<td class='alu'><p>Titel:</p></td>";
echo "<td class='alu'><p>Prioritet:</p></td>";
echo "<td class='alu'><p>Billednavn:</p></td>";
echo "<tr>";
while ($row_list = mysql_fetch_array($results_list)) {
	echo "<tr>";
	echo "<td class='alu'><p>" . $row_list['sani_nr'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['be_titel'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['prioritet'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_list['billednavn'] . "</p></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=19&id=". $row_list['be_id'] ."'><img src='design/b_edit.png' /> Rediger</a></td>";
	echo "<td class='alu' width='75'><a href='main.php?adm=20&id=". $row_list['be_id'] ."'><img src='design/b_drop.png' /> Slet</a></td>";
	echo "</tr>";
}
echo "</table>";


?>