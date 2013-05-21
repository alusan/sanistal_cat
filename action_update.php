<?php 
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");

switch ($_POST['update']) {
	case 'manufacturer':
		include 'includes/admin/update_manufacturer.php';
		break;
	case 'carmodel':
		include 'includes/admin/update_carmodel.php';
		break;
	case 'alulister':
		include 'includes/admin/update_alulister.php';
		break;
	case 'loft_bund':
		include 'includes/admin/update_loft_bund.php';
		break;
	case 'beklaedninger':
		include 'includes/admin/update_beklaedninger.php';
		break;
	default:
		break;
}
	// header("Location: main.php");
?>