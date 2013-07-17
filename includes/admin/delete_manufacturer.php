<?php 
	$m_id = $_POST['manufacturer_id']; // Kun tabellens ID behoeves for at identificere og slette posten
	
	if ($m_id!=NULL) {

		$res_check = mysql_query("SELECT * FROM biler WHERE fabrikant_id = '$m_id'", $conn); 
		$num_rows = mysql_num_rows($res_check);
		
		echo $num_rows;
		
		if ($num_rows==NULL) {
			mysql_query("DELETE FROM fabrikant WHERE fabrikant_id = '$m_id' LIMIT 1;") 
			or die(mysql_error());
		} else {
			echo "<p>Fejl: Du kan ikke slette bilfabrikant, når der er biler tilknyttet</p>";
			break;
		}
	}
?>