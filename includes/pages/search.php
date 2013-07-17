<?php
$s_value = $_POST['search'];

$results_search = mysql_query("SELECT *
								FROM fabrikant, biler
								WHERE fabrikant.fabrikant_id = biler.fabrikant_id AND
									(bil_navn LIKE '%" . $s_value . "%' OR vo_sani_nr LIKE '%" . $s_value . "%' 
									OR lo_sani_nr LIKE '%" . $s_value . "%' OR be_sani_nr LIKE '%" . $s_value . "%')", $conn); 
echo "<h1>Din søgning</h1>";
echo "<table class='dblist'>";
echo "<tr class='aluFirstRow'>";
echo "<td class='alu'><p>Bilfabrikant:</p></td>";
echo "<td class='alu'><p>Bilnavn:</p></td>";
echo "<td class='alu'><p>Vognbund - Sani nr.:</p></td>";
echo "<td class='alu'><p>Loft - Sani nr.:</p></td>";
echo "<td class='alu'><p>Beklædning - Sani nr.:</p></td>";
echo "<tr>";

while ($row_search = mysql_fetch_array($results_search)) {
	echo "<tr>";
	echo "<td class='alu'><a href='main.php?bilid=". $row_search['bil_id'] ."'><p>" . $row_search['fabrikant_navn'] . "</p></a></td>";
	echo "<td class='alu'><a href='main.php?bilid=". $row_search['bil_id'] ."'><p>" . $row_search['bil_navn'] . "</p></a></td>";
	echo "<td class='alu'><p>" . $row_search['vo_sani_nr'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_search['lo_sani_nr'] . "</p></td>";
	echo "<td class='alu'><p>" . $row_search['be_sani_nr'] . "</p></td>";
	echo "</tr>";
}
echo "</table>";



?>