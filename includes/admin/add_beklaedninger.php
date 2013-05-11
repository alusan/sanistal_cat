<?php 
	$be_sani = $_POST['sani_nr'];
	$be_titel = $_POST['titel'];
	$be_beskrivelse = $_POST['beskrivelse'];
	$be_prioritet = $_POST['prioritet'];
	$be_billednavn = $_POST['billednavn'];
	
	if ($be_sani!=NULL && $be_titel!=NULL && $be_beskrivelse!=NULL && $be_prioritet!=NULL && $be_billednavn!=NULL) {
		mysql_query("INSERT INTO bekladninger (sani_nr, be_titel, be_beskrivelse, prioritet, billednavn) VALUES('$be_sani', '$be_titel', '$be_beskrivelse', '$be_prioritet', '$be_billednavn');") 
			or die(mysql_error());
	}
	
?>