<?php 
require_once 'dbconnect.php'; // connect to database
mysql_select_db("sanistaal_db");

switch ($_POST['delete']) {
	case 'manufacturer':
		include 'includes/admin/delete_manufacturer.php';
		break;
	case 'carmodel':
		include 'includes/admin/delete_carmodel.php';
		break;
	case 'alulister':
		include 'includes/admin/delete_alulister.php';
		break;
	case 'loft_bund':
		include 'includes/admin/delete_loft_bund.php';
		break;
	case 'beklaedninger':
		include 'includes/admin/delete_beklaedninger.php';
		break;
	default:
		break;
}
	// header("Location: main.php");
?>