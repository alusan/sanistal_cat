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
								<td class="alu" width="120"><p>Aluminiums-lister</p></td>
								<td class="alu"><p>Længde i cm.</p></td>
							</tr>


<?php
// echo all if there are aluminum-strips available for the carmodel 
$results_alu = mysql_query("SELECT * 
							FROM alulister_connect, alulister
							WHERE alulister_connect.alu_id = alulister.alu_id AND bil_id = '$bilid'
							ORDER BY loft_bund DESC", $conn);
$aluCount = mysql_num_rows($results_alu);

if ($aluCount!=0) {
	while ($row_alu = mysql_fetch_array($results_alu)) {
		echo "<tr>";
		echo "<td class='alu'><p>" . $row_alu['loft_bund'] . "</p></td>";
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
						<img align="right" src="images_cars/<?php echo $row_car['billedenavn']; ?>" alt="<?php echo $row_car['billedenavn']; ?>" />
					</div>
					<div id="bottom_view">
<?php
$vogn_sani = $row_car['vo_sani_nr'];
if ($vogn_sani != 0) {
	echo "<h3>VOGNBUND - Sani nr.: " . $vogn_sani . "</h3>";
	echo "<table class='confitting'>";					

	$results_bund = mysql_query("SELECT * 
							FROM  loft_bund
							WHERE sani_nr = '$vogn_sani'
							ORDER BY bund_loft DESC", $conn);

	echo '<tr>';
	$i_bund = 0;
	while($row_bund = mysql_fetch_array($results_bund)) {
 	   if($i_bund > 0 and $i_bund % 3 == 0) {
	        echo '</tr><tr>';
 	   }
 	   echo "<td>";
		echo "<a href='images_fittings/" . $row_bund['billednavn'] . "' rel='lightbox[bund]' title='";
		echo $row_bund['bund_loft'] . " - Sani nr. " . $row_bund['sani_nr'];
		echo "'>";
		echo "<img src='images_fittings/bn_" . $row_bund['billednavn'] . "' class='bor' alt='" . $row_bund['bund_loft'] . "' title='";
		echo "Sani nr. " . $row_bund['sani_nr'];
		echo "' /></a>";
		echo "<p>" . $row_bund['bund_loft'] . " - Sani nr. " . $row_bund['sani_nr'] . "</p>";
		echo "</td>";
 	   $i_bund++;
	}
	echo '</tr></table>';
} else {
	echo "<h3>Ingen vognbund knyttet bilmodellen</h3>";
}
?>	
									
<?php
$be_sani = $row_car['be_sani_nr'];

if ($be_sani != 0) {
echo "<h3>BEKLÆDNINGER - Sani nr. " . $be_sani . "</h3>";
echo "<table class='confitting'>";

$results_be = mysql_query("SELECT * 
							FROM  bekladninger
							WHERE sani_nr = '$be_sani AND type = 1'
							ORDER BY prioritet", $conn);

$max_be = mysql_num_rows($results_be);
$i_be = 0;
echo '<tr>';
while($row_be = mysql_fetch_array($results_be)) {
    if($i_be > 0 and $i_be % 3 == 0) {
        echo '</tr><tr>';
    }
    echo "<td>";
	echo "<a href='images_fittings/" . $row_be['billednavn'] . "' rel='lightbox[bekladninger]' title='";
	$be_title = $row_be['be_titel'] . " (" . $row_be['prioritet'] . "/" . $max_be . ")";
	echo $be_title;
	echo "'>";
	echo "<img src='images_fittings/bn_" . $row_be['billednavn'] . "' class='bor' alt='" . $be_title . "' title='";
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
	
<?php
$loft_sani = $row_car['lo_sani_nr'];

if ($loft_sani != 0) {
	echo "<h3>LOFT - Sani nr.: " . $loft_sani . "</h3>";
	echo "<table class='confitting'>";	
	$results_lb = mysql_query("SELECT * 
							FROM  bekladninger
							WHERE sani_nr = '$loft_sani AND type = 2'
							ORDER BY prioritet", $conn);

	echo '<tr>';
	$max_lo = mysql_num_rows($results_lb);
	$i_lb = 0;
	while($row_lb = mysql_fetch_array($results_lb)) {
 	   if($i_lb > 0 and $i_lb % 3 == 0) {
			echo '</tr><tr>';
 	   }
    	echo "<td>";
		echo "<a href='images_fittings/" . $row_lb['billednavn'] . "' rel='lightbox[loft]' title='";
		$lo_title = "LOFT " . " (" . $row_lb['prioritet'] . "/" . $max_lo . ")";
		echo $lo_title;
		echo "'>";
		echo "<img src='images_fittings/bn_" . $row_lb['billednavn'] . "' class='bor' alt='Loft' title='";
		echo "Sani nr. " . $row_lb['sani_nr'];
		echo "' /></a>";
		echo "<p>" . $lo_title . "</p>";
		echo "</td>";
 	   $i_lb++;
	}
	echo '</tr></table>';
} else {
	echo "<h3>Ingen loft(er) knyttet bilmodellen</h3>";
}				
?>				
					</div>