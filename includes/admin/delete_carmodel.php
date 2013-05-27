<?php 
	$bil_id = $_POST['bil_id']; // behøves kun tabellens ID for at identificere og slette posten
	
	if ($bil_id!=NULL) {
		
		$get_result = mysql_query("SELECT * FROM biler WHERE bil_id = '$bil_id'", $conn); 
		$get_row = mysql_fetch_array($get_result); 
		$imgname = $get_row['billedenavn'];
		$pdfname = $get_row['pdf_filnavn'];
		
		$path = "images_cars/";
		$delete_img_path = $path . $imgname;
		unlink($delete_img_path);
		
		$path = "pdf/";
		$delete_pdf_path = $path . $pdfname;
		unlink($delete_img_path);
		
		mysql_query("DELETE FROM biler WHERE bil_id = '$bil_id' LIMIT 1;") 
			or die(mysql_error());
		
		//delete relational rows to this carmodel
		mysql_query("DELETE FROM alulister_connect WHERE bil_id = '$bil_id';") 
			or die(mysql_error());
		mysql_query("DELETE FROM loft_bund_connect WHERE bil_id = '$bil_id';") 
			or die(mysql_error());
	}
	
	
?>