<?php 
$cm_fabrikantid = $_POST['fabrikantid'];
$cm_name = $_POST['bilnavn'];
$cm_bekl_sani = $_POST['beklaedninger'];

if ($cm_fabrikantid!=NULL && $cm_name!=NULL && $cm_bekl_sani!=NULL && isset($_POST['bru_lister']) && isset($_POST['bru_loftbunde']) && isset($_FILES['image']) && isset($_FILES['pdf'])) {
	//STAGE 1 - add	to database and retrieve the id
	mysql_query("INSERT INTO biler (fabrikant_id, be_sani_nr, bil_navn, billedenavn, pdf_filnavn) 
					VALUES('$cm_fabrikantid', '$cm_bekl_sani', '$cm_name', 'fillerImg', 'fillerPDF');") 
		or die(mysql_error());
		
	$last_result = mysql_query("SELECT * FROM biler ORDER BY bil_id DESC LIMIT 1", $conn); 
	$last = mysql_fetch_array($last_result); 
	$bil_id = $last['bil_id'];
	
	// retrieve the manufacturer-name
	$fabrikant_result = mysql_query("SELECT * FROM fabrikant WHERE fabrikant_id = '$cm_fabrikantid'", $conn); 
	$fabrikant = mysql_fetch_array($fabrikant_result); 
	$fabrikant_navn = $fabrikant['fabrikant_navn'];
	
	// STAGE 2 - resize and upload image and its thumbnail
	$pdf = $_FILES['pdf']['tmp_name'];
	$pdf_size = $_FILES['pdf']['size'];
	
	$temp = $_FILES['image']['tmp_name'];
	$type = $_FILES['image']['type'];
	$size = $_FILES['image']['size'];
	
	$res = getimagesize($temp);
	$width = $res[0];
	$height = $res[1];
	
	$jpgquality = 100;
	$maxwidth = 304;
	
	switch($type){
		case 'image/jpeg':
		$ext= '.jpg';
		break;
                
		case 'image/png':
		$ext= '.png';
		break;
                
		case 'image/gif':
		$ext= '.gif';
		break;     
	}
	
	$pdf_filename = $cm_bekl_sani . "_" . $bil_id . ".pdf";
	$filename = $fabrikant_navn . '_' . $cm_name . '_' . $bil_id . $ext;
	$path = 'images_cars/';
	$thumb_path = $path . $filename;
	
	$imgtypes = array('image/jpeg', 'image/png', 'image/gif');
	
	if (in_array($type, $imgtypes)) {
		if ($size < 5242880) {
			if ($width == $height) {
				$bn_width = $maxwidth;
				$bn_height = $maxwidth;
			} else {
				$bn_width = $maxwidth;
				$ratio = $bn_width / $width;
				$bn_height = round($height * $ratio);
			}
			
			switch ($type) {
				case 'image/jpeg':
					// upload thumbnail
					$img = imagecreatefromjpeg($temp);
					$thumb = imagecreatetruecolor($bn_width, $bn_height);
					imagecopyresized($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
					imagejpeg($thumb, $thumb_path, $jpgquality);
					break;
				case 'image/png':
					$img = imagecreatefrompng($temp);
                    $thumb = imagecreatetruecolor($bn_width, $bn_height);
                    imagecolortransparent($thumb, imagecolorallocatealpha($thumb, 0, 0, 0, 127));
    				imagealphablending($thumb, false);
    				imagesavealpha($thumb, true);
                    imagecopyresampled($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
                    imagepng($thumb, $thumb_path, 3);
					break;
				case 'image/gif':
					$img = imagecreatefromgif($temp);
                    $thumb = imagecreatetruecolor($bn_width, $bn_height);
                    imagecolortransparent($thumb, imagecolorallocatealpha($thumb, 0, 0, 0, 127));
    				imagealphablending($thumb, false);
    				imagesavealpha($thumb, true);
                    imagecopyresized($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
                    imagegif($thumb, $thumb_path);
					break;
			}		
		}
	} else {
		echo "Image is of wrong type";
		break;
	}
	
	//STAGE 3 - upload PDF if its below 5 mb
	if ($pdf_size < 5242880) {
		move_uploaded_file($pdf, "pdf/$pdf_filename");
	}
	
	//STAGE 4 - Update database with the filenames for image and pdf
	mysql_query("UPDATE biler SET billedenavn = '$filename', pdf_filnavn = '$pdf_filename' WHERE bil_id = '$bil_id';") 
			or die(mysql_error());
	
	
	//STAGE 5 - insert into relational databases loft_bund and alulister
	foreach ($_POST['bru_lister'] as $cm_alulister) {
		mysql_query("INSERT INTO alulister_connect (bil_id, alu_id) VALUES('$bil_id', '$cm_alulister');") 
			or die(mysql_error());
	}
	foreach ($_POST['bru_loftbunde'] as $cm_loftbunde) {
		mysql_query("INSERT INTO loft_bund_connect (bil_id, lb_id) VALUES('$bil_id', '$cm_loftbunde');") 
			or die(mysql_error());
	}
	
}	
?>