<?php 
	$lb_sani = $_POST['sani_nr'];
	$lb_type = $_POST['bund_loft'];
	$lb_img = $_POST['billednavn'];
	
	if ($lb_sani!=NULL && $lb_type!=NULL && $lb_img!=NULL) {
		mysql_query("INSERT INTO loft_bund (sani_nr, bund_loft, billednavn) VALUES('$lb_sani', '$lb_type', '$lb_img');") 
			or die(mysql_error());
	}
	
?>