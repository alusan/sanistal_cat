<?php 
	$be_id = $_POST['be_id']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($be_id!=NULL) {
		
		$get_result = mysql_query("SELECT * FROM bekladninger WHERE be_id = '$be_id'", $conn); 
		$get_row = mysql_fetch_array($get_result); 
		$filename = $get_row['billednavn'];
		
		$path = "images_fittings/";
		$delete_thumb_path = $path . "bn_" . $filename;
		$delete_img_path = $path . $filename;
	
		unlink($delete_thumb_path);
		unlink($delete_img_path);
		
		mysql_query("DELETE FROM bekladninger WHERE be_id = '$be_id' LIMIT 1;") 
			or die(mysql_error());
	}
?>