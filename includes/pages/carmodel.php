<?php
// $results = mysql_query("SELECT * ", $conn); 
// while ($row = mysql_fetch_array($results)) {
	// echo "<td><p>" . $row['ORDERDATE'] . "</p></td>";
// }

$bilid = $_REQUEST['bilid'];

// finds info on the clicked carmodel
$results_car = mysql_query("SELECT * FROM biler WHERE bil_id = '$bilid'", $conn); 
$row_car = mysql_fetch_array($results_car); 

// finds the manufacturer of of the carmodel
$fabrikantid = $row_car['fabrikant_id'];
$results_fabrikant = mysql_query("SELECT * FROM fabrikant WHERE fabrikant_id = '$fabrikantid'", $conn); 
$row_fabrikant = mysql_fetch_array($results_fabrikant);
?>
                   <div id="left_view">
                        <h1><?php echo $row_fabrikant['fabrikant_navn']; ?></h1>
						<h2><?php echo $row_car['bil_navn']; ?></h2>							
						<table class="alu">
							<tr class="aluFirstRow">
								<td class="alu"><p>Aluminiums-lister</p></td>
								<td class="alu"><p>Længde i cm.</p></td>
							</tr>


<?php
// echo all if there are aluminum-strips available for the carmodel 
$results_alu = mysql_query("SELECT * 
							FROM alulister_connect, alulister
							WHERE bil_id = '$bilid'", $conn);
$aluCount = mysql_num_rows($results_alu);

if ($aluCount!=0) {
	while ($row_alu = mysql_fetch_array($results_alu)) {
		echo "<tr>";
		echo "<td class='alu'><p>" . $row_alu['alu_navn'] . " - " . $row_alu['loft_bund'] . "</p></td>";
		echo "<td class='alu' ><p>" . $row_alu['length_cm'] . "</p></td>";
		echo "</tr>";	
	}
} else {
	echo "<td class='alu' colspan='2'><p>Ingen alulister tilknyttet</p></td>";
}
?>
						</table>
						<a href="pdf/<?php echo $row_car['pdf_filnavn']; ?>" target="_blank"><img class="extraTopMargin" src="design/button_download_pdf.jpg" alt="Download PDF" /></a>
					</div>
					<div id="right_view">
						<a href="index.php"><img src="images_cars/<?php echo $row_car['billedenavn']; ?>" alt="Peugeot Bipper" /></a>
					</div>
					<div id="bottom_view">
						<h3>VOGNBUNDE OG LOFT</h3>
						<table class="confitting">
<?php 
$results_lb = mysql_query("SELECT * 
							FROM  loft_bund_connect, loft_bund
							WHERE bil_id = '$bilid' AND loft_bund_connect.sani_nr=loft_bund.sani_nr
							ORDER BY bund_loft DESC", $conn);

echo '<tr>';
$i_lb = 0;
while($row_lb = mysql_fetch_array($results_lb)) {
    if($i_lb > 0 and $i_lb % 3 == 0) {
        echo '</tr><tr>';
    }
    echo "<td>";
	echo "<a href='images_fittings/" . $row_lb['billednavn'] . ".png' rel='lightbox[loftbund]' title='";
	echo $row_lb['bund_loft'] . " - Sani nr. " . $row_lb['sani_nr'];
	echo "'>";
	echo "<img src='images_fittings/bn_" . $row_lb['billednavn'] . ".png' class='bor' alt='" . $row_lb['bund_loft'] . "' title='";
	echo "Sani nr. " . $row_lb['sani_nr'];
	echo "' /></a>";
	echo "<p>" . $row_lb['bund_loft'] . " - Sani nr. " . $row_lb['sani_nr'] . "</p>";
	echo "</td>";
    $i_lb++;
}
echo '</tr>';				
?>					
						</table>
<?php
$results_sani = mysql_query("SELECT * FROM bekladning_connect WHERE bil_id = '$bilid'", $conn); 
$row_sani = mysql_fetch_array($results_sani);
$be_sani = $row_sani['sani_nr'];

if ($be_sani!=NULL) {
echo "<h3>BEKLÆDNINGER - Sani nr. " . $be_sani . "</h3>";
echo "<table class='confitting'>";

$results_be = mysql_query("SELECT * 
							FROM  bekladninger
							WHERE sani_nr = '$be_sani'
							ORDER BY prioritet", $conn);

$max_be = mysql_num_rows($results_be);
$i_be = 0;
echo '<tr>';
while($row_be = mysql_fetch_array($results_be)) {
    if($i_be > 0 and $i_be % 3 == 0) {
        echo '</tr><tr>';
    }
    echo "<td>";
	echo "<a href='images_fittings/" . $row_be['billednavn'] . ".png' rel='lightbox[bekladninger]' title='";
	$be_title = $row_be['be_titel'] . " (" . $row_be['prioritet'] . "/" . $max_be . ")";
	echo $be_title;
	echo "'>";
	echo "<img src='images_fittings/bn_" . $row_be['billednavn'] . ".png' class='bor' alt='" . $be_title . "' title='";
	echo $be_title;
	echo "' /></a>";
	echo "<p>" . $be_title . "</p>";
	echo "</td>";
    $i_be++;
}
echo '</tr></table>';
} else {
	echo "<h3>Ingen beklædninger knyttet bilmodellen</h3>";
}

	
					
?>				
					</div>