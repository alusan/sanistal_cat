<?php 
$lb_sani = $_POST['sani_nr'];
$lb_type = $_POST['bund_loft'];
$loftbund_id = $_POST['lb_id'];
$filename = $_POST['imgname']; // this is the standard if there is no image

if ($lb_sani!=NULL && $lb_type!=NULL && $loftbund_id!=NULL) {
	
	// STAGE 2 - check if there is an image.. then resize and upload image / thumbnail
	if ($_FILES["lb_image"]["size"] > 0) {
	
	$name = $_FILES['lb_image']['name'];
	$temp = $_FILES['lb_image']['tmp_name'];
	$type = $_FILES['lb_image']['type'];
	$size = $_FILES['lb_image']['size'];
	
	$res = getimagesize($temp);
	$width = $res[0];
	$height = $res[1];
	
	$jpgquality = 100;
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
	
	$filename = $lb_sani . '_' . strtolower($lb_type) . '_' . $loftbund_id . $ext;
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
					imagejpeg($thumb, $thumb_path, $jpgquality);
					
					// upload resized image
					$img2 = imagecreatefromjpeg($temp);
					$resizedimg = imagecreatetruecolor($re_width, $re_height);
					imagecopyresized($resizedimg, $img2, 0, 0, 0, 0, $re_width, $re_height, $width, $height);
					imagejpeg($resizedimg, $resized_path, $jpgquality);
					break;
				case 'image/png':
					$img = imagecreatefrompng($temp);
                    $thumb = imagecreatetruecolor($bn_width, $bn_height);
                    imagecolortransparent($thumb, imagecolorallocatealpha($thumb, 0, 0, 0, 127));
    				imagealphablending($thumb, false);
    				imagesavealpha($thumb, true);
                    imagecopyresampled($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
                    imagepng($thumb, $thumb_path, 3);
					
					$img2 = imagecreatefrompng($temp);
					$resizedimg = imagecreatetruecolor($re_width, $re_height);
					imagecolortransparent($resizedimg, imagecolorallocatealpha($resizedimg, 0, 0, 0, 127));
    				imagealphablending($resizedimg, false);
    				imagesavealpha($resizedimg, true);
					imagecopyresampled($resizedimg, $img2, 0, 0, 0, 0, $re_width, $re_height, $width, $height);
					imagepng($resizedimg, $resized_path, 3);
					break;
				case 'image/gif':
					$img = imagecreatefromgif($temp);
                    $thumb = imagecreatetruecolor($bn_width, $bn_height);
                    imagecolortransparent($thumb, imagecolorallocatealpha($thumb, 0, 0, 0, 127));
    				imagealphablending($thumb, false);
    				imagesavealpha($thumb, true);
                    imagecopyresized($thumb, $img, 0, 0, 0, 0, $bn_width, $bn_height, $width, $height);
                    imagegif($thumb, $thumb_path);
					
					$img2 = imagecreatefromgif($temp);
					$resizedimg = imagecreatetruecolor($re_width, $re_height);
					imagecolortransparent($resizedimg, imagecolorallocatealpha($resizedimg, 0, 0, 0, 127));
    				imagealphablending($resizedimg, false);
    				imagesavealpha($resizedimg, true);
					imagecopyresized($resizedimg, $img2, 0, 0, 0, 0, $re_width, $re_height, $width, $height);
					imagegif($resizedimg, $resized_path);
					break;
			}
		}
	} else {
		echo "Image is of wrong type";
		break;
	}
		
	}
	
	//STAGE 3 - Update database 
	mysql_query("UPDATE loft_bund SET sani_nr = '$lb_sani', bund_loft = '$lb_type', billednavn = '$filename' WHERE lb_id = '$loftbund_id';") 
			or die(mysql_error());
} else {
	echo "kører ikke";
}
	
?>
