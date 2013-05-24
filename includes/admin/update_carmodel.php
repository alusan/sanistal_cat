<?php 
$cm_fabrikantid = $_POST['fabrikantid'];
$cm_name = $_POST['bilnavn'];
$cm_bekl_sani = $_POST['beklaedninger'];
$bil_id = $_POST['bil_id'];

$pdf_filename = $_POST['pdfname'];
$filename = $_POST['imgname'];

if ($cm_fabrikantid!=NULL && $cm_name!=NULL && $cm_bekl_sani!=NULL) {
	// STAGE 1 - retrieve the manufacturer-name
	$fabrikant_result = mysql_query("SELECT * FROM fabrikant WHERE fabrikant_id = '$cm_fabrikantid'", $conn); 
	$fabrikant = mysql_fetch_array($fabrikant_result); 
	$fabrikant_navn = $fabrikant['fabrikant_navn'];
	
	// STAGE 2 - resize and upload image and its thumbnail
	$pdf_size = $_FILES['pdf']['size'];
	$size = $_FILES['image']['size'];
	$type = $_FILES['image']['type'];
	
	$imgtypes = array('image/jpeg', 'image/png', 'image/gif');
	
	if (in_array($type, $imgtypes)) {
		if ($size > 0 && $size < 5242880) {
			$pdf = $_FILES['pdf']['tmp_name'];
			$temp = $_FILES['image']['tmp_name'];
	
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
			
			$filename = $fabrikant_navn . '_' . $cm_name . '_' . $bil_id . $ext;
			$path = 'images_cars/';
			$thumb_path = $path . $filename;
			
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
	}
	
	//STAGE 3 - upload PDF if its below 5 mb
	if ($pdf_size > 0 && $pdf_size < 5242880) {
		$pdf_filename = $cm_bekl_sani . "_" . $bil_id . ".pdf";
		move_uploaded_file($pdf, "pdf/$pdf_filename");
	}
	
	//STAGE 4 - Update database with the filenames for image and pdf
	mysql_query("UPDATE biler SET fabrikant_id = '$cm_fabrikantid', be_sani_nr = '$cm_bekl_sani', bil_navn = '$cm_name', 
									billedenavn = '$filename', pdf_filnavn = '$pdf_filename' WHERE bil_id = '$bil_id';") 
			or die(mysql_error());
	
	
	//STAGE 5 - Delete current relational databases and insert new one into loft_bund and alulister
	mysql_query("DELETE FROM alulister_connect WHERE bil_id = '$bil_id';") 
			or die(mysql_error());	
	foreach ($_POST['bru_lister'] as $cm_alulister) {
		mysql_query("INSERT INTO alulister_connect (bil_id, alu_id) VALUES('$bil_id', '$cm_alulister');") 
			or die(mysql_error());
	}
	
	mysql_query("DELETE FROM loft_bund_connect WHERE bil_id = '$bil_id';") 
			or die(mysql_error());
	foreach ($_POST['bru_loftbunde'] as $cm_loftbunde) {
		mysql_query("INSERT INTO loft_bund_connect (bil_id, lb_id) VALUES('$bil_id', '$cm_loftbunde');") 
			or die(mysql_error());
	}
	
}	
?>