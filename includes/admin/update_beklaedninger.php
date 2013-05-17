<?php 
	$be_sani = $_POST['sani_nr'];
	$be_titel = $_POST['titel'];
	$be_beskrivelse = $_POST['beskrivelse'];
	$be_prioritet = $_POST['prioritet'];
	$be_billednavn = $_POST['billednavn'];
	
	if ($be_sani!=NULL && $be_titel!=NULL && $be_beskrivelse!=NULL && $be_prioritet!=NULL && $be_billednavn!=NULL) {
		mysql_query("UPDATE bekladninger SET be_titel = '$be_titel', be_beskrivelse = '$be_beskrivelse', prioritet = '$be_prioritet', billednavn = '$be_billednavn' WHERE = '$be_sani';") 
			or die(mysql_error());
	}
	
?>
