<?php 
$be_sani = $_POST['sani_nr'];
$be_titel = $_POST['titel'];
$be_prioritet = $_POST['prioritet'];

if ($be_sani!=NULL && $be_titel!=NULL && $be_prioritet!=NULL && isset($_FILES['be_image'])) {
	//STAGE 1 - add	to database and retrieve the id
	mysql_query("INSERT INTO bekladninger (sani_nr, be_titel, prioritet, billednavn) VALUES('$be_sani', '$be_titel', '$be_prioritet', 'filler');") 
		or die(mysql_error());
		
	$last_result = mysql_query("SELECT * FROM bekladninger ORDER BY be_id DESC LIMIT 1", $conn); 
	$last = mysql_fetch_array($last_result); 
	$bekladning_id = $last['be_id'];
	
	// STAGE 2 - resize and upload image and its thumbnail
	
	$name = $_FILES['be_image']['name'];
	$temp = $_FILES['be_image']['tmp_name'];
	$type = $_FILES['be_image']['type'];
	$size = $_FILES['be_image']['size'];
	
	$res = getimagesize($temp);
	$width = $res[0];
	$height = $res[1];
	
	$quality = 100;
	$maxheight = 650;
	$maxwidth = 1000;
	
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
	
	$filename = $be_sani . '_' . $be_prioritet . '_id' . $bekladning_id . $ext;
	$path = 'images_fittings/';
	$thumb_path = $path . 'bn_' . $filename;
	$resized_path = $path  . $filename;
	
	$imgtypes = array('image/jpeg', 'image/png', 'image/gif');
	
	if (in_array($type, $imgtypes)) {
		if ($size < 5242880) {
			if ($width == $height) {
				$bn_width = 120;
				$bn_height = 120;
				$re_width = $maxheight;
				$re_height = $maxheight;
			} else {
				$bn_width = 120;
				$ratio = $bn_width / $width;
				$bn_height = round($height * $ratio);
				
				//resizes the resolution number on the big image, if its needed
				if ($width > $maxwidth || $height > $maxheight) {
					
				if( $width < $height ){ $shape=1; }
				if( $width > $height ){ $shape=2; }
				switch($shape){                                                             
					case 1:
						$re_width = $maxwidth;
						$ratio = $re_width / $width;
						$re_height = round($height * $ratio);
				
						if ($re_height > $maxheight) {
							$ratio = $maxheight / $re_height;
							$re_width = round($re_width * $ratio);
							$re_height = $maxheight;
						}
						break;
                                                        
					case 2:
						$re_height = $maxheight;
						$ratio = $re_height / $height;
						$re_width = round($width * $ratio);
				
						if ($re_width > $maxwidth) {
							$ratio = $maxwidth / $re_width;
							$re_height = round($re_height * $ratio);
							$re_width = $maxwidth;
						}
						break;
				} 
				} else {
					$re_width = $width;
					$re_height = $height;
				}
			}
			
			switch ($type) {
				case 'image/jpeg':
					// upload thumbnail
					$img = imagecreatefromjpeg($temp);
					$thumb = imagecreatetruecolor($bn_width, $bn_height);
					imagecopyresized($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
					imagejpeg($thumb, $thumb_path, $quality);
					
					// upload resized image
					$img2 = imagecreatefromjpeg($temp);
					$resizedimg = imagecreatetruecolor($re_width, $re_height);
					imagecopyresized($resizedimg, $img2, 0, 0, 0, 0, $re_width, $re_height, $width, $height);
					imagejpeg($resizedimg, $resized_path, $quality);
					break;
				case 'image/png':
					$img = imagecreatefrompng($temp);
                    $thumb = imagecreatetruecolor($bn_width, $bn_height);
                    imagecopyresized($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
                    imagepng($thumb, $thumb_path, $quality);
					
					$img2 = imagecreatefrompng($temp);
					$resizedimg = imagecreatetruecolor($re_width, $re_height);
					imagecopyresized($resizedimg, $img2, 0, 0, 0, 0, $re_width, $re_height, $width, $height);
					imagepng($resizedimg, $resized_path, $quality);
					break;
				case 'image/gif':
					$img = imagecreatefromgif($temp);
                    $thumb = imagecreatetruecolor($bn_width, $bn_height);
                    imagecopyresized($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
                    imagegif($thumb, $thumb_path, $quality);
					
					$img2 = imagecreatefromgif($temp);
					$resizedimg = imagecreatetruecolor($re_width, $re_height);
					imagecopyresized($resizedimg, $img2, 0, 0, 0, 0, $re_width, $re_height, $width, $height);
					imagegif($resizedimg, $resized_path, $quality);
					break;
			}
			
			if( $width == $height ){ $shape=1; }
            if( $width < $height ){ $shape=2; }
            if( $width > $height ){ $shape=3; }
			
			switch( $shape ){                                        
			case 1:
				$newwidth=              100;
				$newheight=             100;
            	break;                                        
			case 2:
				$newwidth=              100;
				$ratio=                 $newwidth / $width;
				$newheight=             round( $height * $ratio );
				break;                                       
			case 3:
				$newheight=             100;
				$ratio=                 $newheight / $height;
				$newwidth=              round( $width * $ratio );
				break;
                                                        
			}	
		}
	} else {
		echo "Image is of wrong type";
		break;
	}
	
	//STAGE 3 - Update database with the filename 
	mysql_query("UPDATE bekladninger SET billednavn = '$filename' WHERE be_id = '$bekladning_id';") 
			or die(mysql_error());
}
?>