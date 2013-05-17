<?php 
	$lb_sani = $_POST['sani_nr'];
	$lb_type = $_POST['bund_loft'];
	$lb_img = $_POST['billednavn'];
	
	if ($lb_sani!=NULL && $lb_type!=NULL && $lb_img!=NULL) {
		mysql_query("UPDATE loft_bund SET bund_loft = '$lb_type', billednavn = '$lb_img' WHERE sani_nr = '$lb_sani';") 
			or die(mysql_error());
	}
	
?>
