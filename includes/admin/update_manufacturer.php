<?php 
	$m_id = $_POST['manufacturer_id']; // Der skal altid vaere ID i update-filerne for identificere hvilken dele der skal aendres
	$m_name = $_POST['manufacturer_name']; // Samt de ekstra vaerdier der kan og skal aendres 
	
	if ($m_id!=NULL && $m_name!=NULL) {
		mysql_query("UPDATE fabrikant SET fabrikant_navn = '$m_name' WHERE fabrikant_id = '$m_id';") 
			or die(mysql_error());
	}
?>